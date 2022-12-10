import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

function filename() {
	return __filename;
}

function dirname() {
	return __dirname;
}


export { filename, dirname }