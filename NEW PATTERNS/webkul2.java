import java.util.*;
class webkul2{
    public static void main(String arg[]){
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();

        if(n==1||n%2==0){
            return ;
        }
        
        for(int i = 1 ; i<=n/2+1 ; i++){

            for(int j = 1; j<=n/2+n-i+1; j++){
             System.out.print(" ");
            }

            for(int j = 1; j<=2*i-1;j++){
                System.out.print("*");
             }
            
            System.out.println();
        }



        for(int i=1; i<=n-2;i++){
            for(int j=1; j<=n; j++){
                System.out.print(" ");
            }

            System.out.print("@");

            for(int j=1; j<=n-2; j++){
                System.out.print(" ");
            }
            System.out.print("@");
            System.out.println();  
        }



        for(int i = 1 ; i<=n/2+1 ; i++){

            for(int j = 1; j<=i-1; j++){
             System.out.print(" ");
            }

            for(int j = 1; j<=n-2*i+2 ;j++){
                System.out.print("*");
             }

             if(i==1){
                System.out.print("@");
             
             for(int j=1;j<=n-2;j++){
                System.out.print(" ");
             }
             
                System.out.print("@");
             
             for(int j = 1; j<=n;j++){
                System.out.print("*");
             }
            }else{
                for(int j = 1; j<=n+2*i-2;j++){
                    System.out.print(" ");   
                }
                for(int j = 1; j<=n-2*i+2 ;j++){
                    System.out.print("*");
                 }
                 
            }    
           System.out.println();
        }

    }
        }
    
