
import { Entity, Column, PrimaryGeneratedColumn } from 'typeorm';

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
}