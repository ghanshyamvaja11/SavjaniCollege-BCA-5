#include<stdio.h>
#include<math.h>

/*int A[11],P[9],B[9],R[9],Determinant,D1,D2;
    int P1[6],B1[6],R1[6], D4, D5, D6,L;
    int P2[6],B2[6],G6[6],R2[6],B6[6],P6[6],R6[6],SELECT;
    int Select,G[9];
    int A_Row,A_Column,B_Row,B_Column,Row,Column,n,Power;
    int K[9];*/
    int Select;
void main()
{
    printf ("\t    Created By:\n\t  Ghanshyam Vaja\n\t  ______________\n");

    printf ("\n---------Matrix Calculator---------\n         _________________\n\nNOTE:Enter Only Integer Numbers Not Enter Alphabets And float Numbers.\n\n");
   
do
{
printf ("\nOptions👇\n\n1-Determinant\n2-Cramer's Rule Equation Solve \n3-Two Matrix Multiplication(A*B)\n4-Two Matrix Addition(A+B)\n5-Two Matrix Substraction(A-B)\n6-Transpose The Matrix(A^T)\n7-Adjoint Of The Matrix(Adj.A)\n8-Inverse Of The Matrix(A^-1)\n9-Scalar Multiplication(nA) \n10-Exit \n");


        printf ("\n----->Enter Your Choice :\n");
        scanf("%d",&Select);

if(Select!=1 && Select!=2 && Select!=10)
{
printf ("-----------------------------------\n");
    printf ("NOTE: Don't Forgot To Put Matrix Sign([ ]) Around Matrices.\n");
    printf ("-----------------------------------\n");
}
        printf ("\n \n");

        switch(Select)
        {
        case 1:
            Determinant_Take();
            break;
        case 2:
            Cramer_Rule();
            break;
        case 3:
            Matrix_Multiplication();
            break;
        case 4:
            Matrix_Addition();
            break;
        case 5:
            Matrix_Substraction();
            break;
        case 6:
            Transpose_Matrix();
            break;
        case 7:
            Adj_A();
            break;
        case 8:
            Inverse_Matrix();
            break;
        case 9:
            Scalar_Multiplication();
            break;
        case 10:
            exit(0);
        default:
            printf ("Your Input Is Not Valid.\nEnter Valid Input :\n");
        }
    } while(Select<=9);
}

void Determinant_Take()
{
int A[9],Determinant,P[9],R[9];
    do
    {
    printf ("Enter 1 For 2×2 Matrix \nEnter 2 For 3×3 Matrix \n \n ");
    scanf ("%d",&Select);
   
    if(Select!=1 && Select!=2)
    {
    printf ("Enter Valid Input : \n \n");
    }
    }while(Select!=1 && Select!=2);
    
    if(Select==1)
    {
    printf ("\nEnter 4 Element Value \n");
    for(int K=0; K<4; K++)
    {
        scanf ("%d",&A[K]);
    }

    printf ("\n");
    printf ("Entered Matrix A\n");
    printf (" \n");
    
    printf ("   +      -");
    printf (" \n");
    printf ("|%3d    %3d  |\n",A[0],A[1]);
    printf ("|%3d    %3d  |\n \n",A[2],A[3]);
    
    printf ("Determinant Steps :\n");

    printf ("\n=+%d*(%d)-%d*(%d) \n",A[0],A[3],A[1],A[2]);


    Determinant=(A[0]*=(A[3]))-(A[1]*=(A[2]));

    Determinant=A[0]-A[1];

    printf("\n=%d - %d",A[0],A[1]);

    printf("\n ");
    if(Determinant==0)
    {


        printf ("\n Column And Row Are Same.");
    }
    printf ("\n----->Answer |D|=%d\n\n",Determinant);
}
else
{
printf ("\nEnter 9 Element Value \n");
    for(int K=0; K<9; K++)
    {
        scanf ("%d",&A[K]);
    }

    printf ("\n");
    printf ("Entered Matrix A\n");
    printf ("   +       -       +");
    printf ("\n|%3d     %3d     %3d  |\n",A[0],A[1],A[2]);
    printf ("|%3d     %3d     %3d  |\n",A[3],A[4],A[5]);
    printf ("|%3d     %3d     %3d  |\n\n",A[6],A[7],A[8]);

    printf ("Determinant Steps :\n");

    printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[0],A[4],A[8],A[5],A[7],A[1],A[3],A[8],A[5],A[6],A[2],A[3],A[7],A[4],A[6]);


    Determinant=A[0]*(P[0]=(A[4]*A[8]))-(P[1]=(A[5]*A[7]))-A[1]*(P[2]=(A[3]*A[8]))-(P[3]=(A[5]*A[6]))+A[2]*(P[4]=(A[3]*A[7]))-(P[5]=(A[4]*A[6]));

    printf ("=+%d*(%d -%d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[0],P[0],P[1],A[1],P[2],P[3],A[2],P[4],P[5]);
    Determinant=A[0]*(R[0]=(P[0]-P[1]))-A[1]*(R[1]=(P[2]-P[3]))+A[2]*(R[2]=(P[4]-P[5]));
    printf ("=+%d*(%d)-%d(%d)+%d(%d)",A[0],R[0],A[1],R[1],A[2],R[2]);
    Determinant=(A[0]*=R[0])-(
                    A[1]*=R[1])+(A[2]*=R[2]);

    Determinant=A[0]-A[1]+A[2];

    printf("\n=+%d - %d + %d",A[0],A[1],A[2]);


    printf("\n ");


    if(Determinant==0)
    {


        printf ("\n 2 Or 3 Column Or Row Are Same.");
    }
    printf ("\n----->Answer |D|=%d\n\n",Determinant);



}
}

void Cramer_Rule()
{
    int A[11],P[6],B[6],R[6],G6[6],Determinant,D1,D2;
    int P1[6],B1[6],R1[6], D4, D5, D6;
    int P2[6],B2[6],R2[6],B6[6],P6[6],R6[6];
    int K[8],Select;
    char A11[]="a11=",A12[]="a12=",A13[]="a13=";
    char B21[]="b21=",B22[]="b22=",B23[]="b23=";
    char C31[]="c31=",C32[]="c32=",C33[]="c33=";
    char G1[]="Constant=";
    
    printf (" \n");
    printf ("Cramer's Rule Equation Solve \n");
    do
    {
        printf ("\n1- For 2 Veriable Equation\n\n \t+-ax+-ay=Constant\n\t \tOr\n \t+-aa+-ay=Constant\n\n2- For 3 Veriable Equation\n\n \t+-a1x+-a1y+-a1z=Constant\n\t    \t    Or\n \t+-a1a+-a1b+-a1c=Constant\n");
        printf("\nEnter Your Choice :\n");
        scanf ("%d",&Select);

    } while(Select!=1 && Select!=2);

    if(Select==1)
    {
        printf ("\nEnter 6 Element Value \n");
        for(int i=0; i<6; i++)
        {
            if(i==0)
            {
                printf("%s",A11);
            }
            else if(i==1)
            {
                printf ("%s",A12);
            }
            else if(i==2)
            {
                printf ("%s",G1);
            }
            else if(i==3)
            {
                printf ("%s",B21);
            }
            else if(i==4)
            {
                printf ("%s",B22);
            }
            else if(i==5)
            {
                printf ("%s",G1);
            }
            scanf ("%d",&A[i]);
        }
        printf ("\n \n");
        printf ("Entered Equation\n\n=%dx+%dy=%d  Or  %da+%db=%d\n %dx+%dy=%d  Or  %da+%db=%d",A[0],A[1],A[2],A[0],A[1],A[2],A[3],A[4],A[5],A[3],A[4],A[5]);
        printf ("\n \n");
        printf ("Entered Equation's Determinant\n");
        printf (" \n");

        printf ("   +      -");
        printf (" \n");
        printf ("|%3d    %3d  |\n",A[0],A[1]);
        printf ("|%3d    %3d  |\n \n",A[3],A[4]);

        printf ("Determinant Steps :\n");

        printf ("\n=%d*(%d)-%d*(%d) \n",A[0],A[4],A[1],A[3]);


        Determinant=(G6[0]=(A[0]*A[4]))-(G6[1]=(A[1]*A[3]));

        Determinant=G6[0]-G6[1];

        printf("\n=%d - %d",G6[0],G6[1]);

        printf("\n ");
        if(Determinant==0)
        {


            printf ("\n Column And Row Are Same.");
        }
        printf ("\n---->Answer |D|=%d\n\n",Determinant);


        if(Determinant==0)
        {
            printf ("---->NOTE:This Determinant Is Equal To 0.So This Equations Has Not Solution .");
        }

        else
        {


            for(int i=0; i<2; i++)
            {
                if(i==0)
                {
                    printf ("\n(1)\n|Dx| Or |Da| Determinant\n");
                    printf (" \n");

                    printf ("   +      -");
                    printf (" \n");
                    printf ("|%3d    %3d  |\n",A[2],A[1]);
                    printf ("|%3d    %3d  |\n \n",A[5],A[4]);
                    printf ("Determinant Steps :\n");

                    printf ("\n=%d*(%d)-%d*(%d) \n",A[2],A[4],A[1],A[5]);


                    D1=(G6[2]=(A[2]*A[4]))-(G6[3]=(A[1]*A[5]));

                    D1=G6[2]-G6[3];

                    printf("\n=%d - %d",G6[2],G6[3]);

                    printf("\n ");
                    if(D1==0)
                    {


                        printf ("\n Column And Row Are Same.");
                    }
                    printf ("\n----->Answer |Dx| Or |Da|=%d\n",D1);
                }
                else if(i==1)
                {
                    printf ("\n(2)\n|Dy| Or |Da| Determinant\n");
                    printf (" \n");

                    printf ("   +      -");
                    printf (" \n");
                    printf ("|%3d    %3d  |\n",A[0],A[2]);
                    printf ("|%3d    %3d  |\n \n",A[3],A[5]);
                    printf ("Determinant Steps :\n");

                    printf ("\n=%d*(%d)-%d*(%d) \n",A[0],A[5],A[2],A[3]);


                    D2=(G6[4]=(A[0]*A[5]))-(G6[5]=(A[2]*A[3]));

                    D2=G6[4]-G6[5];

                    printf("\n=%d - %d",G6[4],G6[5]);

                    printf("\n ");
                    if(D2==0)
                    {


                        printf ("\nColumn And Row Are Same.\n");
                    }
                   printf ("\n----->Answer |Dy|=%d\n\n",D2);
        printf ("\n------------Answers----------------\n");
        printf ("(1)|D|=%d \n\n",Determinant);
        printf ("(2)x=|Dx|/|D|= %d / %d=%d \n\t \tOR\n a=|Da|/|D|=%d / %d=%d\n\n", D1,Determinant, D1/Determinant,D1,Determinant, D1/Determinant);
        printf ("(3)y=|Dy|/|D|= %d / %d=%d \n\t \tOR\n b=|Db|/|D|=%d / %d=%d\n", D2,Determinant, D2/Determinant,D2,Determinant, D2/Determinant);
        printf ("-----------------------------------  \n");
                   }
            }
     
        }
    }
        else
        {
            printf ("\nEnter 12 Element Value \n");
            for(int K=0; K<=11; K++)
            {
                if(K==0)
                {
                    printf("%s",A11);
                }
                else if(K==1)
                {
                    printf ("%s",A12);
                }
                else if(K==2)
                {
                    printf ("%s",A13);
                }
                else if(K==3)
                {
                    printf ("%s",G1);
                }
                else if(K==4)
                {
                    printf ("%s",B21);
                }
                else if(K==5)
                {
                    printf ("%s",B22);
                }
                else if(K==6)
                {
                    printf ("%s",B23);
                }
                else if(K==7)
                {
                    printf ("%s",G1);
                }
                else if(K==8)
                {
                    printf("%s",C31);
                }
                else if(K==9)
                {
                    printf("%s",C32);
                }
                else if(K==10)
                {
                    printf("%s",C33);
                }
                else if(K==11)
                {
                    printf("%s",G1);
                }
                scanf ("%d",&A[K]);
            }
            printf ("\n \n");
            printf ("Entered Equation\n\n=%dx+%dy+%dz=%d  Or  %da+%db+%dc=%d\n %dx+%dy+%dz=%d  Or  %da+%db+%dc=%d\n %dx+%dy+%dz=%d  Or  %da+%db+%dc=%d ",A[0],A[1],A[2],A[3],A[0],A[1],A[2],A[3],A[4],A[5],A[6],A[7],A[4],A[5],A[6],A[7],A[8],A[9],A[10],A[11],A[8],A[9],A[10],A[11]);

            printf ("\n \n");
            printf ("Entered Equation's Determinant\n");
            printf ("   +       -       +");
            printf ("\n|%3d     %3d     %3d  |\n",A[0],A[1],A[2]);
            printf ("|%3d     %3d     %3d  |\n",A[4],A[5],A[6]);
            printf ("|%3d     %3d     %3d  |\n\n",A[8],A[9],A[10]);

            printf ("Determinant Steps :\n");

            printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[0],A[5],A[10],A[6],A[9],A[1],A[4],A[10],A[6],A[8],A[2],A[4],A[9],A[5],A[8]);


            Determinant=A[0]*(P[0]=(A[5]*A[10]))-(P[1]=(A[6]*A[9]))-A[1]*(P[2]=(A[4]*A[10]))-(P[3]=(A[6]*A[8]))+A[2]*(P[4]=(A[4]*A[9]))-(P[5]=(A[5]*A[8]));

            printf ("=+%d*(%d -%d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[0],P[0],P[1],A[1],P[2],P[3],A[2],P[4],P[5]);
            Determinant=A[0]*(R[0]=(P[0]-P[1]))-A[1]*(R[1]=(P[2]-P[3]))+A[2]*(R[2]=(P[4]-P[5]));
            printf ("=+%d*(%d)-%d(%d)+%d(%d)",A[0],R[0],A[1],R[1],A[2],R[2]);
            Determinant=(B[0]=(A[0]*R[0]))-(B[1]=(A[1]*R[1]))+(B[2]=(A[2]*R[2]));

            Determinant=B[0]-B[1]+B[2];

            printf("\n=+%d - %d + %d",B[0],B[1],B[2]);


            printf("\n ");


            if(Determinant==0)
            {


                printf ("\n 2 Or 3 Column Or Row Are Same.");
            }
            printf ("\n----->Answer |D|=%d\n\n",Determinant);
            if(Determinant==0)
            {
                printf ("---->NOTE:Determinant Is Equal To 0.So This Equation Has Not Solution .");
            }
            else
            {
                printf ("\n(1)Dx Or Da Determinant\n");
                printf ("   +       -       +");
                printf ("\n|%3d     %3d     %3d  |\n",A[3],A[1],A[2]);
                printf ("|%3d     %3d     %3d  |\n",A[7],A[5],A[6]);
                printf ("|%3d     %3d     %3d  |\n\n",A[11],A[9],A[10]);

                printf ("Determinant Steps :\n");

                printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[3],A[5],A[10],A[6],A[9],A[1],A[7],A[10],A[6],A[11],A[2],A[7],A[9],A[5],A[11]);


                D4=A[3]*(P1[0]=(A[5]*A[10]))-(P1[1]=(A[6]*A[9]))-A[1]*(P1[2]=(A[7]*A[10]))-(P1[3]=(A[6]*A[11]))+A[2]*(P1[4]=(A[7]*A[9]))-(P1[5]=(A[5]*A[11]));

                printf ("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[3],P1[0],P1[1],A[1],P1[2],P1[3],A[2],P1[4],P1[5]);
                D4=A[3]*(R1[0]=(P1[0]-P1[1]))-A[1]*(R1[1]=(P1[2]-P1[3]))+A[2]*(R1[2]=(P1[4]-P1[5]));
                printf ("=+%d*(%d)-%d(%d)+%d(%d)",A[3],R1[0],A[1],R1[1],A[2],R1[2]);
                D4=(B1[0]=(A[3]*R1[0]))-(B1[1]=(A[1]*R1[1]))+(B1[2]=(A[2]*R1[2]));

                D4=B1[0]-B1[1]+B1[2];

                printf("\n=+%d - %d + %d",B1[0],B1[1],B1[2]);


                printf("\n ");


                if(D4==0)
                {


                    printf ("\n 2 Or 3 Column Or Row Are Same.");
                }
                printf ("\n----->Answer |Dx| Or |Da|=%d\n\n",D4);
          
            printf ("\n(2)Dy Or Db Determinant\n");
            printf ("   +       -       +");
            printf ("\n|%3d     %3d     %3d  |\n",A[0],A[3],A[2]);
            printf ("|%3d     %3d     %3d  |\n",A[4],A[7],A[6]);
            printf ("|%3d     %3d     %3d  |\n\n",A[8],A[11],A[10]);

            printf ("Determinant Steps :\n");

            printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[0],A[7],A[10],A[6],A[11],A[3],A[4],A[10],A[6],A[8],A[2],A[4],A[11],A[7],A[8]);


            D5=A[0]*(P2[0]=(A[7]*A[10]))-(P2[1]=(A[6]*A[11]))-A[3]*(P2[2]=(A[4]*A[10]))-(P2[3]=(A[6]*A[8]))+A[2]*(P2[4]=(A[4]*A[11]))-(P2[5]=(A[7]*A[8]));

            printf ("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[0],P2[0],P2[1],A[3],P2[2],P2[3],A[2],P2[4],P2[5]);
            D5=A[0]*(R2[0]=(P2[0]-P2[1]))-A[3]*(R2[1]=(P2[2]-P2[3]))+A[2]*(R2[2]=(P2[4]-P2[5]));
            printf ("=+%d*(%d)-%d(%d)+%d(%d)",A[0],R2[0],A[3],R2[1],A[2],R2[2]);
            D5=(B2[0]=(A[0]*R2[0]))-(B2[1]=(A[3]*R2[1]))+(B2[2]=(A[2]*R2[2]));

            D5=B2[0]-B2[1]+B2[2];

            printf("\n=+%d - %d + %d",B2[0],B2[1],B2[2]);


            printf("\n ");


            if(D5==0)
            {


                printf ("\n 2 Or 3 Column Or Row Are Same.");
            }
            printf ("\n----->Answer |Dy| Or |Db|=%d\n\n",D5);

            printf ("\n(3)Dz Or Dc Determinant\n");
            printf ("   +       -       +");
            printf ("\n|%3d     %3d     %3d  |\n",A[0],A[1],A[3]);
            printf ("|%3d     %3d     %3d  |\n",A[4],A[5],A[7]);
            printf ("|%3d     %3d     %3d  |\n\n",A[8],A[9],A[11]);

            printf ("Determinant Steps :\n");

            printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[0],A[5],A[11],A[7],A[9],A[1],A[4],A[11],A[7],A[8],A[3],A[4],A[9],A[5],A[8]);


            D6=A[0]*(P6[0]=(A[5]*A[11]))-(P6[1]=(A[7]*A[9]))-A[1]*(P6[2]=(A[4]*A[11]))-(P6[3]=(A[7]*A[8]))+A[3]*(P6[4]=(A[4]*A[9]))-(P6[5]=(A[5]*A[8]));

            printf ("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[0],P6[0],P6[1],A[1],P6[2],P6[3],A[3],P6[4],P6[5]);
            D6=A[0]*(R6[0]=(P6[0]-P6[1]))-A[1]*(R6[1]=(P6[2]-P6[3]))+A[3]*(R6[2]=(P6[4]-P6[5]));
            printf ("=+%d*(%d)-%d(%d)+%d(%d)",A[0],R6[0],A[1],R6[1],A[3],R6[2]);
            D6=(B6[0]=(A[0]*R6[0]))-(B6[1]=(A[1]*R6[1]))+(B6[2]=(A[3]*R6[2]));

            D6=B6[0]-B6[1]+B6[2];

            printf("\n=+%d -%d +%d",B6[0],B6[1],B6[2]);


            printf("\n ");


            if(D6==0)
            {


                printf ("\n 2 Or 3 Column Or Row Are Same.");
            }
            printf ("\n----->Answer |Dz| Or |Dc|=%d\n\n",D6);
            printf ("\n-------------Answers---------------\n");   
            printf ("(1)|D|=%d \n",Determinant);
            printf ("\n(2)x=|Dx|/|D|= %d / %d=%d\n\t \tOR \t\na=|Da|/|D|= %d / %d=%d \n \n", D4,Determinant, D4/Determinant,D4,Determinant, D4/Determinant);
            printf ("(3)y=|Dy|/|D|= %d / %d=%d\n\t \tOR \t\nb=|Db|/|D|= %d / %d=%d \n \n", D5,Determinant, D5/Determinant,D5,Determinant, D5/Determinant);
            printf ("(4)z=|Dz|/|D|= %d / %d=%d\n\t \tOR \t\nc=|Dc|/|D|= %d / %d=%d \n \n", D6,Determinant, D6/Determinant,D6,Determinant, D6/Determinant);
            printf ("-----------------------------------  \n"); 
            }
        }

}

void Matrix_Multiplication()
{
    int A_Row,A_Column,B_Row,B_Column,Select;

    printf ("\nTwo Matrix Multiplication (A*B)\n ");
    printf("\nInput For First Matrix\n\nRow=");
    scanf("%d", &A_Row);
    printf ("\Column=");
    scanf ("%d",&A_Column);
    printf ("\nInput For Second Matrix \n\n");

    printf ("Row=%d(Second Matrix Row=First Matrix Column)",A_Column);
    printf ("\nColumn=");
    scanf ("%d",&B_Column);

    int A[A_Row][A_Column],B[A_Column][B_Column];
    int Ans[A_Row][B_Column];

    printf ("\nFor First Matrix :\n\nEnter %d Element Values \n",A_Row*A_Column);
    for(int i=0; i<A_Row; i++)
    {
        for(int K=0; K<A_Column; K++)
        {
            scanf ("%d",&A[i][K]);
        }
    }
    printf ("\nFor Second Matrix :\n\nEnter %d Element Values \n",A_Column*B_Column);
    for(int i=0; i<A_Column; i++)
    {
        for(int K=0; K<B_Column; K++)
        {
            scanf ("%d",&B[i][K]);
        }
    }
    printf ("\n");

    for(int i=0; i<A_Row; i++)
    {
        for(int K=0; K<B_Column; K++)
        {
            Ans[i][K]=0;
        }
    }

    printf ("Entered Matrices \n \n");
    printf ("A Matrix\n \n");

    for(int i=0; i<A_Row; i++)
    {
        for(int K=0; K<A_Column; K++)
        {
            printf ("%4d ",A[i][K]);
        }
        printf ("\n");
    }
    printf ("\nB Matrix\n \n");
    for(int i=0; i<A_Column; i++)
    {
        for(int K=0; K<B_Column; K++)
        {
            printf ("%4d ",B[i][K]);
        }
        printf ("\n");
    }


    for(int i=0; i<A_Row; i++)
    {
        for(int K=0; K<B_Column; K++)
        {
            for(int G=0; G<A_Column; G++)
            {
                Ans[i][K]+=A[i][G]*B[G][K];

            }
        }
    }
    printf ("\nMultiplication Matrix Of A*B \n");
    printf("\n");
    for(int i=0; i<A_Row; i++)
    {
        for(int K=0; K<B_Column; K++)
        {
            printf ("%4d ",Ans[i][K]);
        }
        printf (" \n");
    }

}

void Matrix_Addition()
{
    int Row,Column;

    printf ("\nTwo Matrix Addition (A+B)\n ");

    printf("\nInput For Two Matrices\n\nRow=");
    scanf("%d", &Row);
    printf ("\Column=");
    scanf ("%d",&Column);

    int A[Row][Column],B[Row][Column];
    int Ans[Row][Column];

    printf ("\nFor First Matrix :\n\nEnter %d Element Values \n",Row*Column);
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            scanf ("%d",&A[i][K]);
        }
    }
    printf ("\nFor Second Matrix :\n\nEnter %d Element Values \n",Row*Column);
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            scanf ("%d",&B[i][K]);
        }
    }
    printf ("\n");

    printf ("Entered Matrices \n \n");
    printf ("A Matrix\n\n");

    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",A[i][K]);
        }
        printf ("\n");
    }
    printf ("\nB Matrix\n\n");
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",B[i][K]);
        }
        printf ("\n");
    }


    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {

            Ans[i][K]=A[i][K]+B[i][K];

        }
    }

    printf ("\nAddition Matrix Of A+B \n");
    printf("\n");
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",Ans[i][K]);
        }
        printf (" \n");
    }
}

void Matrix_Substraction()
{
    int Row,Column;

    printf ("\nTwo Matrix Substraction (A-B)\n");


    printf("\nInput For Two Matrices\n\nRow=");
    scanf("%d", &Row);
    printf ("\Column=");
    scanf ("%d",&Column);

    int A[Row][Column],B[Row][Column];
    int Ans[Row][Column];

    printf ("\nFor First Matrix :\n\nEnter %d Element Values \n",Row*Column);
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            scanf ("%d",&A[i][K]);
        }
    }
    printf ("\nFor Second Matrix :\n\nEnter %d Element Values \n",Row*Column);
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            scanf ("%d",&B[i][K]);
        }
    }
    printf ("\n");


    printf ("Entered Matrices \n \n");
    printf ("A Matrix\n\n");

    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",A[i][K]);
        }
        printf ("\n");
    }
    printf ("\nB Matrix\n\n");
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",B[i][K]);
        }
        printf ("\n");
    }


    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {

            Ans[i][K]=A[i][K]-B[i][K];

        }
    }

    printf ("\nSubstraction Matrix Of A-B \n");
    printf("\n");
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",Ans[i][K]);
        }
        printf (" \n");
    }
}


void Transpose_Matrix()
{
    int n;

    printf ("Transpose Of Matrix (A^T\n \n");

    printf("\nHow Much Row-Column You Want? \n \n");
    scanf("%d", &n);

    int A[n][n];
    printf ("\nEnter %d Element Value \n",n*n);
    for(int i=0; i<n; i++)
    {
        for(int K=0; K<n; K++)
        {
            scanf ("%d",&A[i][K]);
        }
    }
    printf ("\n");
    printf ("Entered Matrix A\n \n");

    for(int i=0; i<n; i++)
    {
        for(int K=0; K<n; K++)
        {
            printf ("%4d ",A[i][K]);
        }
        printf (" \n");
    }
    printf (" \n");
    for(int i=0; i<n; i++)
    {
        for(int K=0; K<n; K++)
        {
            int Temporary=A[i][K];
            A[i][K]=A[K][i];
            A[K][i]=Temporary;
        }
    }
    printf ("Transposed Matrix A^T\n");
    printf("\n");
    for(int i=0; i<n; i++)
    {
        for(int K=0; K<n; K++)
        {
            printf ("%4d ",A[K][i]);

        }
        printf (" \n");
    }


}

void Adj_A()
{
    printf ("\nAdjoint Of Matrix A (Adj.A)\n \n");
    printf ("Press 1 For 2×2 Matrix\nPress 2 For 3×3 Matrix\n\n");
    int SELECT;
    do
    {
        scanf("%d",&SELECT);
        if(SELECT!=1 && SELECT!=2)
        {
            printf ("Enter Valid Input : \n");
        }
    } while(SELECT!=1 && SELECT!=2);

    int A[9];

    if(SELECT==1)
    {
        printf ("\nEnter 4 Element Value \n");
        for(int K=0; K<4; K++)
        {
            scanf ("%d",&A[K]);
        }
        printf ("\n");
        printf ("Entered Matrix A\n \n");
        printf ("+%2d    -%2d",A[0],A[1]);
        printf ("\n-%2d    +%2d",A[2],A[3]);

        printf ("\n \n");
        printf ("---->Co-Factors Of Matrix A");
        printf ("\n \n%4d    %4d \n",A[3],-A[2]);
        printf ("%4d    %4d",-A[1],A[0]);

        printf ("\n \n");
        printf ("---->Adjoint Of The Matrix A(Adj.A)\n \n");
        printf ("%4d    %4d \n",A[3],-A[1]);
        printf ("%4d    %4d \n \n",-A[2],A[0]);
    }
    else
    {
        printf ("\nEnter 9 Element Value \n");
        for(int K=0; K<9; K++)
        {
            scanf ("%d",&A[K]);
        }
        printf ("\n");
        printf ("Entered Matrix A\n \n");

        printf ("+%2d    -%2d    +%2d\n",A[0],A[1],A[2]);
        printf ("-%2d    +%2d    -%2d\n",A[3],A[4],A[5]);
        printf ("+%2d    -%2d    +%2d",A[6],A[7],A[8]);

        printf ("\n \n");
        printf ("---->Co-Factors Of Matrix A\n\n");
        printf ("%4d ",((A[4]*A[8])-(A[5]*A[7])));
        printf ("%4d ",-((A[3]*A[8])-(A[5]*A[6])));
        printf ("%4d \n",((A[3]*A[7])-(A[4]*A[6])));
        printf ("%4d ",-((A[1]*A[8])-(A[2]*A[7])));
        printf ("%4d ",((A[0]*A[8])-(A[2]*A[6])));
        printf ("%4d \n",-((A[0]*A[7])-(A[1]*A[6])));
        printf ("%4d ",((A[1]*A[5])-(A[2]*A[4])));
        printf ("%4d ",-((A[0]*A[5])-(A[2]*A[3])));
        printf ("%4d \n \n",((A[0]*A[4])-(A[1]*A[3])));

        printf ("\n---->Adjoint Of Matrix A(adj.A)\n \n");
        printf ("%4d ",((A[4]*A[8])-(A[5]*A[7])));
        printf ("%4d ",-((A[1]*A[8])-(A[2]*A[7])));
        printf ("%4d \n",((A[1]*A[5])-(A[2]*A[4])));
        printf ("%4d ",-((A[3]*A[8])-(A[5]*A[6])));
        printf ("%4d ",((A[0]*A[8])-(A[2]*A[6])));
        printf ("%4d \n",-((A[0]*A[5])-(A[2]*A[3])));
        printf ("%4d ",((A[3]*A[7])-(A[4]*A[6])));
        printf ("%4d ",-((A[0]*A[7])-(A[1]*A[6])));
        printf ("%4d ",((A[0]*A[4])-(A[1]*A[3])));
    }
    printf("\n");
}
    


void Inverse_Matrix()
{
    int A[9],P[9],R[9],Determinant;
    int G[9],B[9];
    float K[9];
    int Select;
    printf ("Inverse Of The Matrix A(A^-1) \n\n");
    printf ("Enter 1 For 2×2 Matrix \nEnter 2 For 3×3 Matrix \n \n ");
    scanf ("%d",&Select);
    do
    {
    if(Select!=1 && Select!=2)
    {
    printf ("Enter Valid Input : \n \n");
    }
    }while(Select!=1 && Select!=2);
    if(Select==1)
    {
    printf ("\nEnter 4 Element Value \n");
    for(int K=0; K<4; K++)
    {
        scanf ("%d",&A[K]);
    }

    //Co-factor Logic
    P[0]=A[3];
    P[1]=-A[2];
    P[2]=-A[1];
    P[3]=A[0];
    //Logic End
    printf ("\n");
    printf ("Entered Matrix A\n");
    printf (" \n");
    
    printf ("%3d    %3d \n",A[0],A[1]);
    printf ("%3d    %3d \n \n",A[2],A[3]);
    
    printf ("Determinant Steps :\n");

    printf ("\n=+%d*(%d)-%d*(%d) \n",A[0],A[3],A[1],A[2]);


    Determinant=(A[0]*=(A[3]))-(A[1]*=(A[2]));

    Determinant=A[0]-A[1];

    printf("\n=%d - %d",A[0],A[1]);


    printf("\n ");

    if(Determinant==0)
    {


        printf ("\n Column And Row Are Same.");
    }
    printf ("\n----->Answer |D|=%d\n\n",Determinant);
    
    if(Determinant!=0)
    {
    printf ("---->Co-Factors Of The Matrix A \n ");
    printf ("\n%6d   %6d \n",P[0],P[1]);
    printf ("%6d   %6d \n \n",P[2],P[3]);
    
    
    B[0]=P[0];
    B[1]=P[2];
    B[2]=P[1];
    B[3]=P[3];
    
    printf ("---->Adjoint Of The Matrix A(Adj.A)");
    printf ("\n \n");
    printf("%6d    %6d \n",B[0],B[1]);
   printf ("%6d    %6d \n \n",B[2],B[3]);
    
    
    for(int A=0; A<4; A++)
    {
        K[A]=(float)B[A]/(float)Determinant;
    }

    printf ("----->Inverse Of The Matrix A(A^-1)\n \n \t A^-1=adj.A/|D|\n");

    printf ("\n(1)\n%4d/%2d  %4d/%2d \n",B[0],Determinant,B[1],Determinant);
    printf ("%4d/%2d  %4d/%2d  \n",B[2],Determinant,B[3],Determinant);
 
    }
    else
    {
    printf ("This Matrix Has No Inverse.This Matrix Determinant Is Equal To Zero.So This Matrix Has No Inverse. \n \n");
    }
    }
    else
    {
    printf ("\nEnter 9 Element Value \n");
    for(int K=0; K<9; K++)
    {
        scanf ("%d",&A[K]);
    }

    //Co-factor Logic
    G[0]=((A[4]*A[8])-(A[5]*A[7]));
    G[1]=-((A[3]*A[8])-(A[5]*A[6]));
    G[2]=((A[3]*A[7])-(A[4]*A[6]));
    G[3]=-((A[1]*A[8])-(A[2]*A[7]));
    G[4]=((A[0]*A[8])-(A[2]*A[6]));
    G[5]=-((A[0]*A[7])-(A[1]*A[6]));
    G[6]=((A[1]*A[5])-(A[2]*A[4]));
    G[7]=-((A[0]*A[5])-(A[2]*A[3]));
    G[8]=((A[0]*A[4])-(A[1]*A[3]));
    //Logic End
    printf ("\n");
    printf ("Entered Matrix A\n");
    printf ("\n%3d     %3d     %3d \n",A[0],A[1],A[2]);
    printf ("%3d     %3d     %3d  \n",A[3],A[4],A[5]);
    printf ("%3d     %3d     %3d\n\n",A[6],A[7],A[8]);

    printf ("Determinant Steps :\n");

    printf ("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n",A[0],A[4],A[8],A[5],A[7],A[1],A[3],A[8],A[5],A[6],A[2],A[3],A[7],A[4],A[6]);


    Determinant=A[0]*(P[0]=(A[4]*A[8]))-(P[1]=(A[5]*A[7]))-A[1]*(P[2]=(A[3]*A[8]))-(P[3]=(A[5]*A[6]))+A[2]*(P[4]=(A[3]*A[7]))-(P[5]=(A[4]*A[6]));

    printf ("=%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n",A[0],P[0],P[1],A[1],P[2],P[3],A[2],P[4],P[5]);
    Determinant=A[0]*(R[0]=(P[0]-P[1]))-A[1]*(R[1]=(P[2]-P[3]))+A[2]*(R[2]=(P[4]-P[5]));
    printf ("=%d*(%d)-%d(%d)+%d(%d)",A[0],R[0],A[1],R[1],A[2],R[2]);
    Determinant=(A[0]*=R[0])-(
                    A[1]*=R[1])+(A[2]*=R[2]);

    Determinant=A[0]-A[1]+A[2];

    printf("\n=%d -%d +%d",A[0],A[1],A[2]);


    printf("\n ");


    if(Determinant==0)
    {


        printf ("\n 2 Or 3 Column Or Row Are Same.");
    }
    printf ("\n----->Answer |D|=%d\n\n",Determinant);

    if(Determinant!=0)
    {
    printf ("---->Co-Factors Of The Matrix A \n ");
    printf ("\n%6d   %6d   %6d \n",G[0],G[1],G[2]);
    printf ("%6d   %6d   %6d  \n",G[3],G[4],G[5]);
    printf ("%6d   %6d   %6d\n\n",G[6],G[7],G[8]);

    B[0]=G[0];
    B[1]=G[3];
    B[2]=G[6];
    B[3]=G[1];
    B[4]=G[4];
    B[5]=G[7];
    B[6]=G[2];
    B[7]=G[5];
    B[8]=G[8];

    printf ("----->Adjoint Of The Matrix A(Adj.A)\n \n");
    printf ("%6d  %6d  %6d\n",B[0],B[1],B[2]);
    printf ("%6d  %6d  %6d\n",B[3],B[4],B[5]);
    printf ("%6d  %6d  %6d\n \n",B[6],B[7],B[8]);
    
    printf (" \n");
    for(int A=0; A<=8; A++)
    {
        K[A]=(float)B[A]/(float)Determinant;
    }

    printf ("----->Inverse Of The Matrix A(A^-1)\n \n\t   A^-1=adj.A/|D| \n ");
    
    printf ("\n%4d/%2d  %4d/%2d  %4d/%2d\n",B[0],Determinant,B[1],Determinant,B[2],Determinant);
    printf ("%4d/%2d  %4d/%2d  %4d/%2d\n",B[3],Determinant,B[4],Determinant,B[5],Determinant);
    printf ("%4d/%2d  %4d/%2d  %4d/%2d\n",B[6],Determinant,B[7],Determinant,B[8],Determinant);
   
    }
    else
    {
    printf ("This Matrix Has No Inverse.This Matrix Determinant Is Equal To Zero.So This Matrix No Has Inverse .\n \n");
    }
}

}

void Scalar_Multiplication()
{
    int Row,Column;
    int n;

    printf ("\nScalar Multiplication(nA) \n ");
    printf("\nInput For Matrix\n\nRow=");
    scanf("%d", &Row);
    printf ("\Column=");
    scanf ("%d",&Column);
    
    
    printf ("\n \n");
    
    
    printf ("Enter Scalar nA\nn=");
    
    
    
    scanf ("%d",&n);
    
    int A[Row][Column];
    int Ans[Row][Column];

    printf ("\nEnter %d Element Values \n",Row*Column);
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
          
            scanf ("%d",&A[i][K]);
        }
    }
    
    printf ("\n");

    

    printf ("Entered Matrix \n \n");
    printf ("A Matrix\n");

    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",A[i][K]);
        }
        printf ("\n");
    }
    

    for(int i=0; i<Row; i++)
    {
    
            for(int G=0; G<Column; G++)
            {
                Ans[i][G]=n*(A[i][G]);

            }
        
    }
    printf ("\nScaler Multiplication Of The Matrix %dA \n",n);
    printf("\n");
    for(int i=0; i<Row; i++)
    {
        for(int K=0; K<Column; K++)
        {
            printf ("%4d ",Ans[i][K]);
        }
        printf (" \n");
    }
 
  
}