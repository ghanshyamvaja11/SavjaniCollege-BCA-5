#include<stdio.h>
#include<math.h>

float mean(float A[],int n)
{
    float mean=0;

    for(int i=0; i<n; i++)
    {
        mean+=A[i];
    }
    mean=mean/n;

    return mean;
}

float Sum(float A[], int n)
{
    float Sum_1=0;
    for(int i=0; i<n; i++)
    {
        Sum_1=Sum_1+A[i];
    }
    return Sum_1;
}

float median(float A[],int n)
{
    float median=0;
    int M;
    median=2*((float)(n+1)/4);
    M=(int)median;
    if(2*(n+1)%4==0)
    {
        return (int)A[M-1];
    }
    else
    {
        median=(A[M-1]+A[M])/2;
        return median;
    }
}

float mode(float A[], int n)
{
    float Mode;
    int Count,maxCount=0;
    for(int i=0; i<n; i++)
    {
        Count=1;
        for(int K=i+1; K<n; K++)
        {
            if(A[i]==A[K])
            {
                Count++;
                if(Count>maxCount)
                {
                    Mode=A[i];
                }
            }
        }
    }
    return Mode;
}

void Quartiles(float A[], int n)
{
    int Q1,Q2,Q3;
    float A1,A2,A3,IQR;
    float Q_1,Q_2,Q_3,Range;
    Q_1=1*((float)(n+1)/4);
    Q1=(int)Q_1;
    if(1*(n+1)%4==0)
    {
        if(Q1==1)
        {
            printf("Q1=%dst Term is",Q2);
        }
        else if(Q1==2)
        {
            printf("Q1=%dnd Term is",Q2);
        }
        else if(Q1==3)
        {
            printf("Q1=%drd Term is",Q2);
        }
        else
        {
            printf("Q1=%dth Term is",Q1);
        }
        A1=A[Q1-1];
        printf(" %d\n",(int)A1);
    }
    else
    {
        printf("Q1=%.1fth Term Is",Q_1);
        A1=(A[Q1-1]+A[Q1])/2;
        printf(" %.1f\n",A1);
    }
    Q_2=2*((float)(n+1)/4);
    Q2=(int)Q_2;
    if(2*(n+1)%4==0)
    {
        if(Q2==1)
        {
            printf("Q2=%dst Term Is",Q2);
        }
        else if(Q2==2)
        {
            printf("Q2=%dnd Term Is",Q2);
        }
        else if(Q2==3)
        {
            printf("Q2=%drd Term Is",Q2);
        }
        else
        {
            printf("Q2=%dth Term Is",Q2);
        }
        A2=A[Q2-1];
        printf(" %d\n",(int)A2);
    }
    else
    {
        printf("Q2=%.1fth Term Is",Q_2);
        A2=(A[Q2-1]+A[Q2])/2;
        printf(" %.1f\n",A2);
    }
    Q_3=3*(((float)n+1)/4);
    Q3=(int)Q_3;
    if(3*(n+1)%4==0)
    {
        if(Q3==1)
        {
            printf("Q3=%dst Term is",Q3);
        }
        else if(Q3==2)
        {
            printf("Q3=%dnd Term is",Q3);
        }
        else if(Q3==3)
        {
            printf("Q3=%drd Term is",Q3);
        }
        else
        {
            printf("Q3=%dth Term is",Q3);
        }
        A3=A[Q3-1];
        printf(" %d\n",(int)A3);
    }
    else
    {
        printf("Q3=%.1fth Term Is",Q_3);
        A3=(A[Q3-1]+A[Q3])/2;
        printf(" %.1f\n",A3);
    }
    if(2*(n+1)%4==0)
    {
        printf("Median=%d\n",(int)A2);
    }
    else
    {
        printf("Median=%.1f\n",A2);
    }
    IQR=A3-A1;
    printf("Interquartile Range(IQR)=%.1f\n",IQR);
    printf("Minimum=%.1f \n",A[0]);
    printf("Maximum=%.1f \n",A[n-1]);
    Range=A[n-1]-A[0];
    printf("Range=%.1f\n",Range);

}
float Min(float A[])
{
    return A[0];
}

float Max(float A[],int n)
{
    return A[n-1];
}

float Range(float A[],int n)
{
    return A[n-1]-A[0];
}

float S_D(float A[],int n)
{
    float Mean;
    float Temp_Sum,Variance=0;
    float S[n];
    int Choice;
    float P_S_D,S_S_D;
    printf("1-Population Standard Deviation\n2-Sample Standard Deviation\n\n");
    printf("Enter Your Choice=");
    scanf("%d",&Choice);

    while(Choice<1||Choice>2)
    {
        printf("Enter Valid Input=");
        scanf("%d",&Choice);
    }

    if(Choice<1||Choice>2)
    {

    }
    else
    {
        printf("n=%d \n",n);
        Mean=mean(A,n);
        printf("Mean=%.1f \n",Mean);
        for(int i=0; i<n; i++)
        {
            S[i]=A[i]-Mean;
        }
        printf("Sum(Σx)=%.1f \n",Sum(A,n));
        for(int i=0; i<n; i++)
        {
            Temp_Sum+=pow(S[i],2);
        }
        printf("(xi-Mean)^2=%.1f \n",Temp_Sum);

        if(Choice==1)
        {
            Variance=Temp_Sum/n;
            printf("Variance(σ2)=%.2f\n",Variance);
        }
        else
        {
            Variance=Temp_Sum/(n-1);
            printf("Variance(σ2)=%.2f\n",Variance);
        }
    }
    switch(Choice)
    {
    case 1:
        P_S_D= sqrt(Variance);
        return P_S_D;

    case 2:
        S_S_D= sqrt(Variance);
        return S_S_D;
    }
}
int main()
{
    int n;
    int Choice;
    printf("\tStatistics Calculator \n \nCreated By Ghanshyam Vaja\n\n");
    printf("1-Mean\n2-Median\n3-Mode\n4-Quartiles\n5-Minumum\n6-Maximum\n7-Range\n8-Standard Deviation\n \n");
    printf("Enter Your Choice=");
    scanf("%d",&Choice);
    while(Choice<1||Choice>8)
    {
        printf("Enter Valid Input=");
        scanf("%d",&Choice);
    }
    printf("How Much Observations You Have?=");
    scanf("%d",&n);
    float A[n];
    printf("Enter %d Observations\n",n);
    for(int i=0,K=0; i<n,K<n; i++,K++)
    {
        printf("%d - ",K+1);
        scanf("%f",&A[i]);
    }

    printf("Observations:\n");
    for(int k=0; k<n; k++)
    {
        printf("%.1f ",A[k]);
    }

    float mid=(0+n-1)/2;
    Mergesort(A,0,n-1);
    printf("\n\nObservations In Ascending Order\n");
    for(int k=0; k<n; k++)
    {
        printf("%.1f ",A[k]);

    }
    printf("\n \n");


    switch(Choice)
    {
    case 1:
        printf("Sum=%.1f \n",Sum(A,n));
        printf("Mean=%.1f\n",mean(A,n));
        break;

    case 2:
        printf("Sum=%.1f \n",Sum(A,n));
        printf("Median=%.1f\n",median(A,n));
        break;

    case 3:
        printf("Mode=%.1f\n",mode(A,n));
        break;

    case 4:
        Quartiles(A,n);
        break;

    case 5:
        printf("Minimum=%.1f \n",Min(A));
        break;

    case 6:
        printf("Maximum=%.1f \n",Max(A,n));
        break;

    case 7:
        printf("Range=%.1f\n",Range(A,n));
        break;

    case 8:
        printf("Standard Deviation=%.5f",S_D(A,n));
        break;
    }

}

void Merge(float A[],int L,int Mid,int H)
{
    int i=L,j=Mid+1,K=L;
    float B[H];
    while(i<=Mid&&j<=H)
    {
        if(A[i]<A[j])
        {
            B[K]=A[i];
            K++;
            i++;
        }
        else
        {

            B[K]=A[j];
            K++;
            j++;

        }
    }
    while(i<=Mid)
    {
        B[K]=A[i];

        K++;
        i++;
    }
    while(j<=H)
    {
        B[K]=A[j];

        K++;
        j++;
    }

    for (int i=L; i<=H; i++)
    {
        A[i]=B[i];
    }
}

void Mergesort(float A[], int L, int H)
{
    int Mid=(L+H)/2;
    if(L<H)
    {
        Mergesort(A,L,Mid);
        Mergesort(A,Mid+1,H);
        Merge(A,L,Mid,H);
    }
}