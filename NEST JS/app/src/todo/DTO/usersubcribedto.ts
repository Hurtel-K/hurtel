import { Injectable } from "@nestjs/common";
import { IsNotEmpty } from "class-validator";
import { Column } from "typeorm";



export class TodoSubcribeDto {


    
  @IsNotEmpty()
  @Column()
  titre: string;
  
  @IsNotEmpty() 
  @Column()
  password: string ;

}