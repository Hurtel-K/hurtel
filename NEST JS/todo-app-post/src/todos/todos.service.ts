import { Injectable, NotFoundException } from '@nestjs/common';
import path from 'path';
import { CreateTodoDto } from './DTO/create-todo.dto';
import { Todo } from './interfaces/todo.interface';

@Injectable()
export class TodosService {

 todos:Todo[]  =[
        {
            id: 1,
            title: 'todos app',
            description:'create nestjs todos app',
            done:false
        },

        {
            id: 2,
            title: 'bread',
            description:'buy bread ',
            done:true
        },
        {
            id: 3,
            title: 'wine',
            description:'buy wine ',
            done:true
        }
    ];

    
    findOne(id: string) {
        return this.todos.find(todo =>todo.id === Number (id));
    }

    findAll(): Todo[]{
        return this.todos;
    }

    create(todo:CreateTodoDto){
        this.todos = [...this.todos, todo];
    }

update(id:string, todo:Todo){
//recuperer le todo pour update

const todoToUpdate = this.todos.find(t => t.id === +id);
 if(!todoToUpdate){
    return new NotFoundException('il n\'existe pas');
 } 
 
 //appliquer les modifications

 if(todo.hasOwnProperty('done')) {
    todoToUpdate.done =todo.done;
 }

 if(todo.title) {
    todoToUpdate.title = todo.title; 
 }
 
 if(todo.description) {
    todoToUpdate.description = todo.description; 
 }
  //appliquer les modifications
  const updatedTodos =this.todos.map(t =>t.id !== +id ? t:todoToUpdate);
  this.todos = [...updatedTodos];
  return { updatedTodo: 1, todo:todoToUpdate};
}
}
