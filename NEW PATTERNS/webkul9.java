import java.util.*;
class webkul9{
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        for(int i=1;i<=n;i++){          
                System.out.println("@");
        }

        for(int i=0; i<n; i++){
            if(i==0){
                System.out.print("@");
                for(int j=0; j<n ;j++){
                    System.out.print("*");
                }
            }
            else{
            for(int j =0;j<i*(n-1)+1;j++){
                System.out.print(" ");
            }
            for(int j =0;j<n;j++){
                System.out.print("*");
            }
             
            if(i==n-1){
                System.out.print("@");
            }
            
        }
       
            System.out.println();
        }
    

        for(int i =1; i<=n; i++){
            for(int j =1;j<=((n-1)*(n-1))+1+n;j++){
                System.out.print(" ");
            }       
            System.out.println("@");
           
        
            
            // System.out.println();
    }
        }
            
        }
    
