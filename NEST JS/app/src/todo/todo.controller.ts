import { Body, Controller,Delete,Get, Param, Patch, Post} from '@nestjs/common';
import { Todo } from 'src/entity/todo.entity';
import { LoginCredentialsDto } from './DTO/login dentialsDto';
import { TodoSubcribeDto } from './DTO/usersubcribedto';
import { TodoService } from './todo.service';


@Controller('todo')


export class TodoController {

    constructor(private readonly todoservice: TodoService){}
    
    @Get()
    getAll(): Promise<Todo[]>{
        return this.todoservice.findAll();
    }
    
   
 @Post('/first')

 createTodo(@Body() newtodo:Todo) {
this.todoservice.create(newtodo);
return('cree avec succes');
 }
 @Patch(':id')
updateTodo(@Param('id') id:string,@Body() todo:Todo){

  return this.todoservice.update(+id, todo);
}

@Delete(':id')
deleteTodo(@Param('id') id:string){
  return this.todoservice.remove(id);
}
  
@Post()

SubcribeTodo(@Body() todoData:TodoSubcribeDto): Promise<Partial<Todo>> {
return this.todoservice.subcribe(todoData);
}
 
@Post('login')

login(@Body() credentials:LoginCredentialsDto): Promise<Partial<Todo>> {
return this.todoservice.login(credentials);
}

}