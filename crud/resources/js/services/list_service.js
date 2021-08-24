import {http, httpFile} from './http_service';
import store from '../store';

export function update(task) {
    return http().post('/update', task);
}

export function addTask(task) {
    return http().post('/add', task);
}

export function deleteTask(task) {
    return http().post('/delete', task);
}

export function clearComplete(user) {
    return http().post('/clear', user);
}

export function saveStatus(status) {
    return http().post('/status', status);
}

export function getTasks(user_id) {
    return http().get('/tasks', {
        params: {
            'user_id': user_id
        }
    });
}