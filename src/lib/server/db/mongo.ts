import { MONGODB_URI } from '$env/static/private';
import {MongoClient} from 'mongodb';


const client = new MongoClient(MONGODB_URI)

export function start_mongo() {
	console.log('Starting mongo...');
	return client.connect();
}

export default client.db()