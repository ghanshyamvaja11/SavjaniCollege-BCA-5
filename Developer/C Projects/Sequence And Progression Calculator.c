#include<stdio.h>
#include<math.h>
int G;
float AP(float a,float d,float n)
{
    float Series,b,G;
    b=a;
    G=d;
    printf(" \n");
    if(G==3)
    {
        printf("AP Terms:\n \n");
    }
    else
    {
        printf("AP Terms:\n \n");
    }
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1f\n",i+1,b);
        }
        else
        {
            b+=G;
            Series=b;
            printf("%4d - %.1f \n",i+1,Series);
        }
    }


    printf(" \n");
    float an;
    an=a+((n-1)*d);
    return an;
}
float AP_Sum(float a,float d,float n)
{
    float Series,b,G;
    b=a;
    G=d;
    printf(" \n");
    printf(" Terms:\n \n");
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1f\n",i+1,b);
        }
        else
        {
            b+=G;
            Series=b;
            printf("%4d - %.1f \n",i+1,Series);
        }
    }
    printf("\n \n");
    float Sum;
    Sum=(n/2)*(2*a+(n-1)*d);
    return Sum;
}

double GP(double a,float r,float n)
{
    double Series,b,G;
    b=a;
    G=(double)r;
    printf(" \n");
    printf(" Terms:\n \n");
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1lf \n",i+1,b);
        }
        else
        {
            b*=G;
            Series=b;
            printf("%4d - %.1lf \n",i+1,Series);
        }
    }
    printf("\n%.1fth Term In GP:\n%.1lf",n,Series);
    printf(" \n");
    double an;
    r=pow(r,n-1);
    an=a*r;
    return an;
}

double GP_Sum(double a,float r,float n)
{
    double Series,b,G;
    b=a;
    G=(double)r;
    printf(" \n");
    printf(" Terms:\n \n");
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1lf \n",i+1,b);
        }
        else
        {
            b*=G;
            Series=b;
            printf("%4d - %.1lf \n",i+1,Series);
        }
    }
    printf(" \n");
    double Sum;
    Sum=(a*(1-pow(r,n)))/(1-r);
    printf("\nSum Sn=%.2lf \n",Sum);
    return Sum;
}

float HP(float a,float d,float n)
{
    float Series,b,G;
    b=a;
    G=d;
    printf(" \n");
    printf("HP Terms:\n \n");
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - 1/%.1f\n",i+1,b);
        }
        else
        {
            b+=G;
            Series=b;
            printf("%4d - 1/%.1f \n",i+1,Series);
        }
    }


    printf(" \n");
    float an;
    an=a+((n-1)*d);
    return an;
}

float A_Sequence(float a,float f,int n)
{

    float A;
    float A_S;
    printf(" Terms:\n \n");
    A=a;
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1f \n",i+1,A);
        }
        else
        {
            A+=f;
            printf("%4d - %.1f \n",i+1,A);
        }


    }
    printf(" \n \n");

    for(int i=0; i<n; i++)
    {
        A_S=a+(f*(n-1));
    }
    return A_S;
}
float A_Sequence_Sum(float a,float f,int n)
{
    float A_S;
    float Sum;

    for(int i=0; i<n; i++)
    {
        A_S=a+(f*(n-1));
    }

    Sum=(n*(a+A_S))/2;

    return Sum;
}

double G_Sequence(double a,float r,int n)
{
    double A;
    A=a;
    printf(" Terms:\n \n");

    for(int i=0; i<n-1; i++)
    {
        a*=r;
    }
    for(int i=0; i<n; i++)
    {
        if(i==0)
        {
            printf("%4d - %.1f \n",i+1,A);
        }
        else
        {
            A=A*r;
            printf("%4d - %.1f \n",i+1,A);
        }
    }


    printf(" \n");
    printf("Geometric Sequence %dth Term:\n%.1lf \n \n",n,A);
    return a;
}
double G_Sequence_Sum(double a,float r,int n)
{

    double G_S;
    G_S=(a*(1-pow(r,n)))/(1-r);
    printf("Sum Sn=%.2lf \n",G_S);
    return G_S;
}

int Fibonacci(int n)
{
    if (n<=1)
    {
        return n;
    }
    return Fibonacci(n-1) + Fibonacci(n-2);

}
int Fibonacci_Sum(int n)
{
    int Sum=0;
    printf(" Terms: \n \n");
    for(int i=1; i<=n; i++)
    {
        if(i==1)
        {
            printf("%4d - %d \n",i-1,1-1);
            printf("%4d - %d \n",i,Fibonacci(i));
        }
        else
        {
            printf("%4d - %d \n",i,Fibonacci(i));
        }
    }
    for(int i=0; i<=n; i++)
    {
        Sum+=Fibonacci(i);
    }
    printf("\n%dth Value In Fibonacci Series:\n%d \n",n,Fibonacci(n));
    return Sum;
}

float AM()
{
    int n;
    float Sum=0,Mean;
    printf("Enter Number Of Observations=");
    scanf("%d",&n);
    float A[n];
    printf("\n");
    printf("NOTE:\nAll Inputs Has In Fully Ascending \nOr Decending Order \n \n");
    printf("Enter %d Observations:\n",n);
    for(int i=0,K=0; i<n,K<n; i++,K++)
    {
        printf("%d - ",K+1);
        scanf("%f",&A[i]);
    }
    for(int i=0; i<n; i++)
    {
        Sum+=A[i];
    }
    printf(" \n");
    printf("Sum=%.1f \n",Sum);
    Mean=Sum/n;
    printf("Arithmetic Mean(AM)=%.4f",Mean);
}



float GM()
{
    int n;
    float Mean=1;
    printf("Enter Number Of Observations=");
    scanf("%d",&n);
    float A[n];
    printf("\n");
    printf("NOTE\n:All Inputs Has In Fully Ascending \nOr Decending Order \n \n");
    printf("Enter %d Observations:\n",n);

    for(int i=0,K=0; i<n,K<n; i++,K++)
    {
        printf("%d - ",K+1);
        scanf("%f",&A[i]);
    }
    for(int i=0; i<n; i++)
    {
        Mean=Mean*A[i];
    }
    printf(" \n");
    for(int i=0; i<(n/2); i++)
    {
        Mean=sqrt(Mean);
    }
    printf("Geometric Mean(GM)=%.4f",Mean);
}


float HM()
{
    int n;
    float Mean=0;
    printf("Enter Number Of Observations=");
    scanf("%d",&n);
    float A[n];
    printf("\n");
    printf("NOTE:\nAll Inputs Has In Fully Ascending \nOr Decending Order \n \n");
    printf("Enter %d Observations:\n",n);
    for(int i=0,K=0; i<n,K<n; i++,K++)
    {
        printf("%d - ",K+1);
        scanf("%f",&A[i]);
    }
    for(int i=0; i<n; i++)
    {
        Mean+=1/A[i];
    }
    printf(" \n");
    Mean=n/Mean;
    printf("Harmonic Mean(HM)=%.4f",Mean);
}

void main()
{   int r1,n1;
    float n;
    float a,d,f,r;
    int Choice;
    double a1;
    printf("Sequence And Progression Calculator\n___________________________________\n\n    Created By Ghanshyam Vaja\n___________________________________\n\n");
    printf("1-Arithmetic Progression\n2-Geomatric Progrssion\n3-Harmonic Progression\n4-Sum Of Arithmetic Progression\n5-Sum Of Geometric Progression\n6-Arithmetic Sequence\n7-Geometric Sequence\n8-Fibonacci Sequence\n9-Arithmetic Mean\n10-Geometric Mean\n11-Harmonic Mean \n");
    printf("\n");
    printf("Enter Your Choice=");
    scanf("%d",&Choice);
    G=Choice;
    while(Choice<1||Choice>11)
    {
        printf("Enter Valid Input=");
        scanf("%d",&Choice);
    }
    if(Choice==2||Choice==5||Choice==7)
    {
        printf("\nNOTE:Enter nth Term in 1 To 30 \n \n");
    }
    if(Choice<9&&Choice<10&&Choice<11)
    {
        if(Choice==8)
        {
            printf("Enter n Term In integer Value(an):\n");
            scanf("%d",&n1);
        }
        else
        {
            if(Choice==3)
            {
                printf("Enter First AP Term(a1)=");
                scanf("%f",&a);
            }
            else if(Choice==2 || Choice==7 || Choice==5)
            {
                printf("Enter First Term(a1)=");
                scanf("%lf",&a1);
            }
            else
            {
                printf("Enter First Term(a1)=");
                scanf("%f",&a);
            }
            if(Choice==1 || Choice==3 || Choice==4)
            {
                printf("Enter Common Difference(d)=");
                scanf("%f",&d);
            }
            else if(Choice==6)
            {
                printf("Enter Common Difference(f)=");
                scanf("%f",&f);
            }
            else
            {
                printf("Enter Ratio(r)=");
                scanf("%f",&r);
            }
            if(Choice==6 || Choice==7)
            {
                printf("Enter nth Term In Integer(an)=");
                scanf("%d",&n1);
            }
            else
            {
                printf("Enter nth Term(an)=");
                scanf("%f",&n);
            }
        }
    }
    printf("\n");
    float A=n;
    switch(Choice)
    {
    case 1:
        printf("\n%.1fth Term Of AP:\n%.2f\n",A,AP(a,d,n));
        break;

    case 2:
        A,GP(a1,r,n);
        break;

    case 3:
        printf("\n%.1fth Term Of AP=%.4f \n \n",A,AP(a,d,n));
        printf("\n%.1fth Term Of HP=1/%.4f\n",A,HP(a,d,n));
        break;

    case 4:
        printf("Sum Sn=%.2f \n",AP_Sum(a,d,n));
        break;

    case 5:
        GP_Sum(a1,r,n);
        break;

    case 6:
        printf("\nArithmetic Sequence %dth Term=%.1f \n \n",n1,A_Sequence(a,f,n1));
        printf("Sum Sn=%.1f \n\n",n1,A_Sequence_Sum(a,f,n1));
        break;

    case 7:
        G_Sequence(a1,r,n1);
        G_Sequence_Sum(a1,r,n1);
        break;

    case 8:
        printf("\nSum=%d \n",Fibonacci_Sum(n1));
        break;

    case 9:
        AM();
        break;

    case 10:
        GM();
        break;

    case 11:
        HM();
        break;

    }

}