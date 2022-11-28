#include<iostream>
#include<math.h>
using namespace std;

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

float mean(float A[],int n)
{
    float mean=0;

    for(int i=0; i<n; i++)
    {
        mean+=A[i];
    }
    mean/=n;

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
    float mode;
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
                    mode=A[i];
                }
            }
        }
    }
    return mode;
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
            cout<<"Q1="<<Q1<<"st Term Is ";
        }
        else if(Q1==2)
        {
            cout<<"Q1="<<Q1<<"nd Term Is ";
        }
        else if(Q1==3)
        {
            cout<<"Q1="<<Q1<<"rd Term Is ";
        }
        else
        {
            cout<<"Q1="<<Q1<<"th Term Is ";
        }
        A1=A[Q1-1];
        cout<<(int)A1<<" \n";
    }
    else
    {
        cout<<"Q1="<<Q_1<<"th Term Is ";
        A1=(A[Q1-1]+A[Q1])/2;
        cout<<A1<<" \n";
    }
    Q_2=2*((float)(n+1)/4);
    Q2=(int)Q_2;
    if(2*(n+1)%4==0)
    {
        if(Q2==1)
        {
            cout<<"Q2="<<Q2<<"st Term Is ";
        }
        else if(Q2==2)
        {
            cout<<"Q2="<<Q2<<"nd Term Is ";
        }
        else if(Q2==3)
        {
            cout<<"Q2="<<Q2<<"rd Term Is ";
        }
        else
        {
            cout<<"Q2="<<Q2<<"th Term Is ";
        }
        A2=A[Q2-1];
        cout<<(int)A2<<" \n";
    }
    else
    {
        cout<<"Q2="<<Q_2<<"th Term Is ";
        A2=(A[Q2-1]+A[Q2])/2;
        cout<<A2<<" \n";
    }
    Q_3=3*(((float)n+1)/4);
    Q3=(int)Q_3;
    if(3*(n+1)%4==0)
    {
        if(Q3==1)
        {
            cout<<"Q3="<<Q3<<"st Term Is "<<Q3;
        }
        else if(Q3==2)
        {
            cout<<"Q3"<<Q3<<"nd Term Is "<<Q3;
        }
        else if(Q3==3)
        {
            cout<<"Q3="<<Q3<<"rd Term Is "<<Q3;
        }
        else
        {
            cout<<"Q3="<<Q3<<"th Term Is "<<Q3;
        }
        A3=A[Q3-1];
        cout<<(int)A3<<" \n";
    }
    else
    {
        cout<<"Q3="<<Q_3<<"th Term Is ";
        A3=(A[Q3-1]+A[Q3])/2;
        cout<<A3<<" \n";
    }
    if(2*(n+1)%4==0)
    {
        cout<<"Median="<<(int)A2<<" \n";
    }
    else
    {
        cout<<"Median="<<A2<<" \n";
    }
    IQR=A3-A1;
    cout<<"Interquartile Range(IQR)="<<IQR<<" \n";
    cout<<"Minimum="<<A[0]<<" \n";
    cout<<"Maximum="<<A[n-1]<<" \n";
    Range=A[n-1]-A[0];
    cout<<"Range="<<Range<<" \n";

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
    cout<<" \n1-Population Standard Deviation\n2-Sample Standard Deviation\n\n";
    cout<<"Enter Your Choice=";
    cin>>Choice;

    while(Choice<1||Choice>2)
    {
        cout<<"Enter Valid Input=";
        cin>>Choice;
    }

    if(Choice<1||Choice>2)
    {

    }
    else
    {
        cout<<"n="<<n<<" \n";
        Mean=mean(A,n);
        cout<<"Mean="<<Mean<<" \n";
        for(int i=0; i<n; i++)
        {
            S[i]=A[i]-Mean;
        }
        cout<<"Sum(Σx)="<<Sum(A,n)<<" \n";
        for(int i=0; i<n; i++)
        {
            Temp_Sum+=pow(S[i],2);
        }
        cout<<"(xi-Mean)^2="<<Temp_Sum<<" \n";

        if(Choice==1)
        {
            Variance=Temp_Sum/n;
            cout<<"Variance(σ2)="<<Variance<<" \n";
        }
        else
        {
            Variance=Temp_Sum/(n-1);
            cout<<"Variance(σ2)="<<Variance<<" \n";
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
    int n,L=0;
    float SD;
    int Choice;
    cout<<"\tStatistics Calculator \n \nCreated By Ghanshyam Vaja\n\n";
    cout<<"1-Mean\n2-Median\n3-mode\n4-Quartiles\n5-Minumum\n6-Maximum\n7-Range\n8-Standard Deviation\n \n";
    cout<<"Enter Your Choice=";
    cin>>Choice;
    while(Choice<1||Choice>8)
    {
        cout<<"Enter Valid Input=";
        cin>>Choice;
    }
    cout<<"How Much Observations You Have?=";
    cin>>n;
    float A[n];
    cout<<"Enter "<<n<<" Observations\n";
    for(int i=0,K=0; i<n,K<n; i++,K++)
    {
        cout<<K+1<<" - ";
        cin>>A[i];
    }
    
    cout<<" \nObservations: \n";
    
    for(int i=0;i<n;i++)
    {
    	cout<<A[i]<<", ";
    }
    
    Mergesort(A,L,n-1);
    cout<<"\n\nObservations In Ascending Order\n";
    for(int k=0; k<n; k++)
    {
        cout<<A[k]<<", ";

    }
     
    cout<<"\n \n";

    
    switch(Choice)
    {
    case 1:
        cout<<"Sum="<<Sum(A,n)<<" \n";
        cout<<"Mean="<<mean(A,n)<<" \n";
        break;

    case 2:
        cout<<"Sum="<<Sum(A,n)<<" \n";
        cout<<"Median="<<median(A,n)<<" \n";
        break;

    case 3:
        cout<<"mode="<<mode(A,n)<<" \n";
        break;

    case 4:
        Quartiles(A,n);
        break;

    case 5:
        cout<<"Minimum="<<Min(A)<<" \n";
        break;

    case 6:
        cout<<"Maximum="<<Max(A,n)<<" \n";
        break;

    case 7:
        cout<<"Range="<<Range(A,n)<<" \n";
        break;

    case 8:
    SD=S_D(A,n);
        cout<<"Standard Deviation="<<SD<<" \n";
        break;
    }

}