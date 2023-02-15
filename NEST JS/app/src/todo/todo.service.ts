
import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Todo } from 'src/entity/todo.entity';
import { Repository } from 'typeorm';


@Injectable()
export class TodoService {
  

  constructor(
    @InjectRepository(Todo)
    private todoRepository: Repository<Todo>,
  ) {}

  findAll(): Promise<Todo[]> {
    return this.todoRepository.find();
  }

  findOne(id: number): Promise<Todo> {
    return this.todoRepository.findOneBy({ id });
  }

  
  create(todo: Todo): Promise<Todo> {
    return this.todoRepository.save( todo );
  }
  
  async update(id: number,todo:Todo) {

    const todoToUpdate = await this.todoRepository.findOneById(id);
      if(!todoToUpdate){
         return new NotFoundException('il n\'existe pas')
        } 
      //appliquer les modifications
     
      if(todo.hasOwnProperty('isActive')) {
         todoToUpdate.isActive =todo.isActive;
      }
     
      if(todo.titre) {
         todoToUpdate.titre = todo.titre; 
      }
      
      if(todo.description) {
         todoToUpdate.description = todo.description; 
      }
      await this.todoRepository.update(id,todo);
      return {message:'successfful update'}
  }

  async remove(id: string): Promise<any> {
    await this.todoRepository.delete(id);
  return {message:'supression effectuer'};
  }
}
