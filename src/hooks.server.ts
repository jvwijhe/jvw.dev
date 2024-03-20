
import { MONGO_API_KEY, MONGO_DB, MONGO_ENDPOINT } from '$env/static/private';
import type { Handle } from '@sveltejs/kit';
import axios from 'axios';
export const handle: Handle = async ({ event, resolve }) => {

    if (!event.cookies.get('sessionid')) {
        let uuid = crypto.randomUUID();
        event.cookies.set('sessionid', uuid, {
            maxAge: 60 * 60 * 24 * 7,
            path: '/'
        })
    }

    event.locals.user = event.cookies.get('sessionid')



    var data = JSON.stringify({
        "collection": "events",
        "database": MONGO_DB,
        "dataSource": "Cluster0",
        "document": {
            "name": "page_view",
            "date": new Date(),
            "user": event.locals.user
        }
    });

    var config = {
        method: 'post',
        url: `${MONGO_ENDPOINT}/insertOne`,
        headers: {
            'Content-Type': 'application/json',
            'Access-Control-Request-Headers': '*',
            'api-key': MONGO_API_KEY
        },
        data: data
    };

    await axios(config)

    const response = await resolve(event);
    return response;
};