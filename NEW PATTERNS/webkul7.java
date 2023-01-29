import java.util.*;
class webkul7{
    public static void main(String arg[]){
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();

        if(n==1||n%2==0){
            return ;
        }

        for(int i = 1 ; i<=n/2+2;i++){
        System.out.println("e");
        }

        for(int i = 1 ; i<=n/2+3; i++){
  
          System.out.print("e");

        for(int j = 1 ; j<=i-1;j++){
        System.out.print(" ");
        }

        for(int j = 1 ; j<=n-2*i+2;j++){
        System.out.print("*");
        }
    
     System.out.println();
    }
    }     
    }
        
     
        
       
        

        

    
        
    
