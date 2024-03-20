import { events } from '$db/events';
import type { Handle } from '@sveltejs/kit';

export const handle: Handle = async ({ event, resolve }) => {
    
    if(!event.cookies.get('sessionid')) {
       let uuid = crypto.randomUUID();
         event.cookies.set('sessionid', uuid, {
            maxAge: 60 * 60 * 24 * 7,
            path: '/'
         })
    }

    event.locals.user = event.cookies.get('sessionid')

    // check if event from user with current date exists in db
    // if not, create it
    let midnight = new Date();
    midnight.setHours(0,0,0,0);
    let docs = await events.find({
        user: {
            $eq: event.locals.user
        },
        $and: [
            {date: {
                $gte: midnight
            }},
            {
                date: {
                    $lt: new Date()
                }
            }

        ]
    }).toArray()


    if(!docs.length) {
        await events.insertOne({ name: 'page_view', date: new Date(), user: event.locals.user});
    }


	const response = await resolve(event);
	return response;
};