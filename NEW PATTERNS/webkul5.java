import java.util.*;
class webkul5{
    public static void main(String arg[]){
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();

       
        
        for(int i = 1 ; i<=n; i++){
            System.out.print("@");
            for(int j = 1; j<= i*(n-1)-n+1; j++){   //0 , 
             System.out.print(" ");
            }
            for(int j = 1; j<=n; j++){
             System.out.print("*");
            }
            if(i==n){
                System.out.print("@");
            }
            System.out.println();
            }
            System.out.print("@"); 

            for(int j = 1; j<=(n-1)*(n-1)+n; j++){ //7
            System.out.print(" "); 
        }
        System.out.print("@");
        
        System.out.println();

            for(int i = 1; i<=n-1 ; i++){
              for(int j = 1; j<=(n-1)*(n-1)+n+1; j++){
                System.out.print(" "); 
            }
            System.out.println("@");
            }
        
         }
        
           }    
           
        

   
    
