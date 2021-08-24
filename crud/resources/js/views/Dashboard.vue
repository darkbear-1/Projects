<template>
    <div>
        <b-row>
            <b-col>
                <h1 class="text-center p-3">Список дел</h1>
            </b-col>
        </b-row>
        <b-container class="bv-example-row">
            <b-row>
                <div class="task__list" :key="updateItem">
                    <div class="task__item" :key="task.id" v-for="(task, index) of tasksList" v-if="!task.status">
                        <b-input-group>
                            <b-input-group-prepend is-text>
                                <input type="checkbox" :id="'task__item-status-' + task.id" :checked="task.status" @change="statusChange(task.id, $event)">
                            </b-input-group-prepend>
                            <b-form-input :value="task.text" @change="saveList($event, task.id)"></b-form-input>
                        </b-input-group>
                        <button class="remove-repeater" @click.once="deleteTask(task.id, index)"><i class="fas fa-trash"></i></button>
                    </div>
                    <div class="task__item">
                        <b-input-group>
                            <b-form-input @change="addTask($event)" v-model="addText" placeholder="Для записи нового дела заполните данное поле и нажмите Enter"></b-form-input>
                        </b-input-group>
                    </div>
                </div>
            </b-row>
        </b-container>
        <b-container class="bv-example-row">
            <b-row>
                <b-col>
                    <div class="complete__title-wrap">
                        <h2 class="text-center p-3">Выполненные</h2>
                        <button class="complete__clear-btn" @click="clearComplete()" v-if="clearChecker">Очистить выполненные</button>
                    </div>
                </b-col>
            </b-row>
            <b-row>
                <div class="task__list task__list--completed" :key="updateItem">
                    <div class="task__item" :key="task.id" v-for="(task, index) of tasksList" v-if="task.status">
                        <div class="task__item-title">{{task.text}}</div>
                    </div>
                </div>
            </b-row>
        </b-container>
        </b-row>
    </div>
</template>

<style>
    .task__list {
        width: 100%;
    }

    .task__item {
        display: flex;
    }

    .task__item:not(:last-child) {
        margin-bottom: 10px;
    }

    .task__item-title {
        text-decoration: line-through;
    }

    .complete__title-wrap {
        margin-top: 30px;
        position: relative;
    }

    .complete__clear-btn {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .complete__clear-btn {
        cursor: pointer;
        background: none;
        border: none;
        text-decoration: underline;
    }
</style>

<script>
    import * as auth from '../services/auth_service';
    import * as tasks from '../services/list_service';
    export default {
        data: function() {
            return {
               addText: "",
               updateItem: 0
            }
        },
        computed: {
            tasksList() {
                return this.$store.state.tasksObj;
            },
            clearChecker() {
                if (this.tasksList.length > 0) {
                    var check = false;
                    this.tasksList.forEach(function callback(currentValue, index) {
                        if (currentValue.status == 1)
                            check = true;
                    })
                    return check;
                }
            }
        },
        methods: {
            reloadTasks: async function() {
                try {
                    const response = await tasks.getTasks(this.$store.state.profile.id);
                    this.$store.dispatch('tasksSet', response.data);
                } catch (error) {
                    
                }
            },
            clearComplete: async function() {
                try {
                    await tasks.clearComplete({"user_id": this.$store.state.profile.id});
                    this.reloadTasks();
                    this.updateItem++;
                    this.error = {};
                } catch (error) {
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            },
            addTask: async function(text) {
                try {
                    await tasks.addTask({"text": text, "user": this.$store.state.profile.id});
                    this.reloadTasks();
                    this.addText = "";
                    this.error = {};
                } catch (error) {
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            },
            statusChange: async function(id, status) {
                try {
                    await tasks.saveStatus({"id" : id, "status": status.target.checked});
                    this.reloadTasks();
                    this.error = {};
                } catch (error) {
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            },
            saveList: async function(text, id) {
                try {
                    var taskStatus = document.getElementById("task__item-status-" + id).checked;
                    await tasks.update({"text": text, "id" : id, "status": taskStatus});
                    this.error = {};
                } catch (error) {
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            },
            deleteTask: async function(id, index) {
                try {
                    await tasks.deleteTask({"id" : id});
                    this.$store.dispatch('sliceArr', {"index": index});
                    this.updateItem++;
                    this.error = {};
                } catch (error) {
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            }
        }
    }
</script>
