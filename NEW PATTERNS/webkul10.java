import java.util.*;
class webkul10{
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        int x=0;
        for(int i=0;i<2*n;i++){
            boolean flag = false;
            if(i<n+1){
                System.out.print("@");
            } else{
                System.out.print(" ");
            }  
        
        for(int j=0;j<n*(n-1)+1;j++){  // for column
         if(i>=n/2 && i<2*n-n/2){
            if(j<(n-1)*x||j>(n-1)*x+n-1){
                System.out.print(" ");
            }else{
                System.out.print("*");
                flag = true;
            }
        }else{
            System.out.print(" ");
         }
        }

        if(flag)x++;
        
        if(i>=n-1){
            System.out.print("@");
        } else{
            System.out.print(" ");
        }  
        System.out.println();
        }

        }

    }

