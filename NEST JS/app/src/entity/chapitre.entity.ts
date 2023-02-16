
import { Entity, Column, PrimaryGeneratedColumn, ManyToOne } from 'typeorm';
import { Todo } from './todo.entity';

@Entity()
export class Chapitre {
  [x: string]: any;
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  nom: string;

  @Column()
  todoId: number;

  @ManyToOne(() => Todo, (todo) => todo.chapitres)
  todo: Todo

}