#include<stdio.h>
#include<math.h>

float Distance_2(float x1,float y1,float x2, float y2)
{
    float d;
    printf("\n(x1,y1)=(%.1f, %.1f) \n",x1,y1);
    printf("(x2,y2)=(%.1f, %.1f) \n \n",x2,y2);

    d=sqrt(pow((x2-x1),2)+pow((y2-y1),2));

    printf("Distance d=%.6f \n",d);
    return d;
}

float Distance_3(float x1,float y1, float z1, float x2, float y2, float z2)
{
    float d;
    printf("\n(x1,y1,z1)=(%.1f, %.1f, %.1f) \n",x1,y1,z1);
    printf("(x2,y2,z2)=(%.1f, %.1f, %.1f) \n \n",x2,y2,z2);

    d=sqrt(pow((x2-x1),2)+pow((y2-y1),2)+pow((z2-z1),2));

    printf("Distance d=%.6f \n",d);
    return d;
}

float Gradient(float x1,float y1,float x2,float y2)
{
    printf("\n(x1,y1)=(%.1f, %.1f) \n",x1,y1);
    printf("(x2,y2)=(%.1f, %.1f) \n ",x2,y2);

    float m;
    m=(y1-y2)/(x1-x2);
    printf("\nGradient (m)=%.6f \n",m);
}


float MidPoint_2(float x1,float y1,float x2,float y2)
{

    printf("\n(x1,y1)=(%.1f, %.1f) \n",x1,y1);
    printf("(x2,y2)=(%.1f, %.1f) \n ",x2,y2);

    float A,B;
    A=(x1+x2)/2;
    B=(y1+y2)/2;

    printf("\nMid Point M(%.1f, %.1f) \n",A,B);
}

float MidPoint_3(float x1,float y1, float z1, float x2, float y2, float z2)
{
    printf("\n(x1,y1,z1)=(%.1f, %.1f, %.1f) \n",x1,y1,z1);
    printf("(x2,y2,z2)=(%.1f, %.1f, %.1f) \n ",x2,y2,z2);
    float A,B,C;
    A=(x1+x2)/2;
    B=(y1+y2)/2;
    C=(z1+z2)/2;
    printf("\nMid Point M(%.1f, %.1f, %.1f) \n",A,B,C);
}

float Section_Internal(float x1,float y1, float x2, float y2, float m, float n)
{

    printf("\n(x1,y1)=(%.1f, %.1f) \n",x1,y1);
    printf("(x2,y2)=(%.1f, %.1f) \n\nRatio:\nm=%.1f  n=%.1f (%.1f : %.1f)\n \n",x2,y2,m,n,m,n);

    float A,B;
    A=((m*x2)+(n*x1));
    B=((m*y2)+(n*y1));
    printf("Coordinates Of Point:\n(%.1f/%.1f, %.1f/%.1f)",A,m+n,B,m+n);
    A=((m*x2)+(n*x1))/(m+n);
    B=((m*y2)+(n*y1))/(m+n);
    printf("=(%.1f, %.1f) \n",A,B);
}

float Section_External(float x1,float y1, float x2, float y2, float m, float n)
{

    printf("\n(x1,y1)=(%.1f, %.1f) \n",x1,y1);
    printf("(x2,y2)=(%.1f, %.1f) \n \nRatio:\nm=%.1f  n=%.1f (%.1f : %.1f)\n \n",x2,y2,m,n,m,n);

    float A,B;

    A=((m*x2)-(n*x1));
    B=((m*y2)-(n*y1));
    printf("Coordinates Of Point:\n(%.1f/%.1f, %.1f/%.1f)",A,m-n,B,m-n);
    A=((m*x2)-(n*x1))/(m-n);
    B=((m*y2)-(n*y1))/(m-n);
    printf("=(%.1f, %.1f) \n",A,B);
}

float AOT(float x1,float x2,float x3,float y1,float y2,float y3)
{
float AT;
printf("\nVertices:\nA(%.1f, %.1f), \nB(%.1f, %.1f), \nC(%.1f, %.1f)\n",x1,y1,x2,y2,x3,y3);
   x1=x1*(y2-y3);
   x2=x2*(y1-y3);
   x3=x3*(y1-y2);
   AT=(x1-x2+x3);
  

   printf(" \n");
   printf("Area Of Triangle:\n%.1f/2=%.1f \n",AT,AT/2);
}

int main()
{   int Choice,Choice2;
    float x1,y1,z1,x2,y2,z2,x3,y3;
    float m,n;
    printf("Co-Ordinate And Geometry Calculator\n___________________________________\n\n    Created By Ghanshyam Vaja\n___________________________________\n\n");
    printf("1-Find Distance\n2-Find Gradient Between Two Points\n3-Find Midpoint\n4-Section Formula\n5-Area Of Triangle \n");
    printf(" \n");
    printf("Enter Your Choice=");
    scanf("%d",&Choice);
    while(Choice<1||Choice>5)
    {
        printf("Enter Valid Input=");
        scanf("%d",&Choice);
    }
    printf(" \n");

    if(Choice==1)
    {
        printf("1-Between 2 Points\n2-Between 3 Points\n\nEnter Your Choice=");
        scanf("%d",&Choice2);
        while(Choice2<1||Choice2>2)
        {
            printf("Enter Valid Input=");
            scanf("%d",&Choice2);
        }
    }

    else if(Choice==3)
    {
        printf("1-Between 2 Points\n2-Between 3 Points\n\nEnter Your Choice=");
        scanf("%d",&Choice2);
        while(Choice2<1||Choice2>2)
        {
            printf("Enter Valid Input=");
            scanf("%d",&Choice2);
        }
    }

    else if(Choice==4)
    {
        printf(" \n");
        printf("1-For Internal Section\n2-For External Section\n\nEnter Your Choice=");
        scanf("%d",&Choice2);
        while(Choice2<1||Choice2>2)
        {
            printf("Enter Valid Input=");
            scanf("%d",&Choice2);
        }
    }

    if(Choice==1)
    {
        if(Choice2==1)
        {
            printf("\nFormula:\nAB=Sq.Root((x1+x2)^2 + (y1+y2)^2)\n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f",&x1);
            printf("y1=");
            scanf("%f",&y1);
            printf("x2=");
            scanf("%f",&x2);
            printf("y2=");
            scanf("%f",&y2);
        }
        else
        {
            printf("\nFormula:\nAB=SquareRoot((x1+x2)^2 + (y1+y2)^2 + (z1+z2)^2)\n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f",&x1);
            printf("y1=");
            scanf("%f",&y1);
            printf("z1=");
            scanf("%f",&z1);
            printf("x2=");
            scanf("%f",&x2);
            printf("y2=");
            scanf("%f",&y2);
            printf("z2=");
            scanf("%f",&z2);
        }
    }
    else if(Choice==2)
    {
        printf("\nFormula:\nm=(y1-y2) / (x1-x2) \n");
        printf("\nEnter Values:\n\nx1=");
        scanf("%f",&x1);
        printf("y1=");
        scanf("%f",&y1);
        printf("x2=");
        scanf("%f",&x2);
        printf("y2=");
        scanf("%f",&y2);
    }

    else if(Choice==3)
    {
        if(Choice2==1)
        {
            printf("\nFormula:\nM((x1+x2)/2, (y1+y2)/2\n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f",&x1);
            printf("y1=");
            scanf("%f",&y1);
            printf("x2=");
            scanf("%f",&x2);
            printf("y2=");
            scanf("%f",&y2);
        }
        else
        {
            printf("\nFormula:\nM((x1+x2)/2, (y1+y2)/2, (z1+z2)/2 \n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f",&x1);
            printf("y1=");
            scanf("%f",&y1);
            printf("z1=");
            scanf("%f",&z1);
            printf("x2=");
            scanf("%f",&x2);
            printf("y2=");
            scanf("%f",&y2);
            printf("z2=");
            scanf("%f",&z2);
        }
    }

    else if(Choice==4)
    {
        if(Choice2==1)
        {
            printf("\nFormula:\nx=((m*x2)+(n*x1))/(m+n)\ny=((m*y2)+(n*y1))/(m+n)\n");
        }
        else
        {
            printf("\nFormula:\nx=((m*x2)-(n*x1))/(m-n)\ny=((m*y2)-(n*y1))/(m-n)\n");
        }
        printf("\nEnter Values:\n\nx1=");
        scanf("%f",&x1);
        printf("y1=");
        scanf("%f",&y1);
        printf("x2=");
        scanf("%f",&x2);
        printf("y2=");
        scanf("%f",&y2);
        printf("m=");
        scanf("%f",&m);
        printf("n=");
        scanf("%f",&n);
    }

    else if(Choice==5)
    {
        printf("\nFormula:\n1/2[x1(y2–y3)+x2(y3–y1)+x3(y1–y2)] \n \n");
        printf("\nEnter Values:\n\nx1=");
        scanf("%f",&x1);
        printf("y1=");
        scanf("%f",&y1);
        printf("x2=");
        scanf("%f",&x2);
        printf("y2=");
        scanf("%f",&y2);
        printf("x3=");
        scanf("%f",&x3);
        printf("y3=");
        scanf("%f",&y3);
    }



    switch(Choice)
    {
    case 1:
        if (Choice2==1)
        {
            Distance_2(x1,y1,x2,y2);
        }
        else
        {
            Distance_3(x1,y1,z1,x2,y2,z2);
        }
        break;

    case 2:
        Gradient(x1,y1,x2,y2);
        break;

    case 3:
        if(Choice2==1)
        {
            MidPoint_2(x1,y1,x2,y2);
        }
        else
        {
            MidPoint_3(x1,y1,z1,x2,y2,z2);
        }
        break;

    case 4:
        if(Choice==4&&Choice2==1)
        {
            Section_Internal(x1,y1,x2,y2,m,n);
        }
        else
        {
            Section_External(x1,y1,x2,y2,m,n);
        }
        break;
    case 5:
        AOT(x1,x2,x3,y1,y2,y3);
        break;
    }

}