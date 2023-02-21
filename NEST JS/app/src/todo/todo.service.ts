
import { ConflictException, Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Todo } from 'src/entity/todo.entity';
import { Repository } from 'typeorm';
import { TodoSubcribeDto } from './DTO/usersubcribedto';
import * as bcrypt from 'bcrypt';
import { LoginCredentialsDto } from './DTO/login dentialsDto';
import { JwtService } from '@nestjs/jwt/dist';

@Injectable()
export class TodoService {
  register(todoData: TodoSubcribeDto): Promise<Todo> {
    throw new Error('Method not implemented.');
  }
  

  constructor(
    @InjectRepository(Todo)
    private todoRepository: Repository<Todo>,
    private jwtService: JwtService
  ) {}

  findAll(): Promise<Todo[]> {
    return this.todoRepository.find();
  }
 
  // getTodoById(id:number){
  //   return this.todoRepository.findOne(id);
  // }
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

 async subcribe (todoData:TodoSubcribeDto): Promise<Partial<Todo>> {

  const todo = this.todoRepository.create({
    ...todoData
  });
  todo.salt = await bcrypt.genSalt();
  todo.password = await bcrypt.hash(todo.password,todo.salt);
   try{
    this.todoRepository.save(todo);
   } 
   catch (e){
    throw new ConflictException('todoname et le passeword doivent etre unique');
    
   }
   return {id: todo.id,titre:todo.titre,password:todo.password
   }
 }
//ce loger
async login(credentials:LoginCredentialsDto){
//recuperer le login et le mots de pass
const {titre,password} = credentials;
//on peut se loger ou via le todotitre ou password
//verifier est ce qu'il ya un todo avec ce login ou ce mdp
const todo = await this.todoRepository.createQueryBuilder("todo")
.where("todo.titre= :titre or todo.password = :titre ",
{titre} 
) 
.getOne();

//si not todo je declanche une erreur
if(!todo)
throw new NotFoundException('todo ou password erroné');

//si oui je verifie est ce que le mot de pass est correct ou non

if (await bcrypt.compareSync(password, todo.password)){
  const payload =  {
    titre,
    role:todo.role 

  };
  const jwt = await this.jwtService.sign(payload);
return{"access_token" : jwt}
}
//si mots de passe in correcte je declanche une erreu

else {
  throw new NotFoundException('titre ou password erroné');

}
}
}
  