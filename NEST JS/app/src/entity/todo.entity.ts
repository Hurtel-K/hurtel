
import { Entity, Column, PrimaryGeneratedColumn, OneToMany } from 'typeorm';
import { Chapitre } from './chapitre.entity';

@Entity()
export class Todo {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  titre: string; 

  @Column()
  description: string;

  @Column({ default: true })
  isActive: boolean;
  
  @OneToMany(type => Chapitre, (chapitre) => chapitre.todo)
  chapitres: Chapitre[];
}