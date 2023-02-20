import { IsNotEmpty } from "class-validator";

export class  LoginCredentialsDto{
    
    
  @IsNotEmpty()
  titre: string;
  
  @IsNotEmpty() 
  password: string ;

} 
