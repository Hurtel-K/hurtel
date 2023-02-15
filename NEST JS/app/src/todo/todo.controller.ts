import { Body, Controller,Get, Post} from '@nestjs/common';
import { Todo } from 'src/entity/todo.entity';
import { TodoService } from './todo.service';


@Controller('todo')


export class TodoController {

    constructor(private readonly todoservice: TodoService){}
    
    @Get()
    getAll(): Promise<Todo[]>{
        return this.todoservice.findAll();
    }
    
   
 @Post()

 createTodo(@Body() newtodo:Todo) {
this.todoservice.create(newtodo);
 }
}