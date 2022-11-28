#include <stdio.h>
struct Employee
{
    int emp_Id;
    char emp_name[20];
    char dept[10];
    char Designation[20];
    float Basic_Salary;
    float TA;
    float DA;
    float HRA;
    float PF;
    float PT;
    float Gross_Salary;
};

void main()
{
    int i;
    int n;
    printf("How Much Employee Salary Report You Want To Create? \n");
    scanf("%d",&n);

    float temp[n];
    float temp1[n];
    float temp2[n];
    struct Employee Employee[n];
    printf("Enter This Detalis: \n");


    printf("employee_ID= \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",i+1);
        scanf("%d",&Employee[i].emp_Id);
    }
    printf("employee_Name= \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%s",&Employee[i].emp_name);
    }

    printf("employee_Department= \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%s",&Employee[i].dept);
    }
    printf("employee_Designation= \n");
    for(i=0; i<n; i++) {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%s",&Employee[i].Designation);
    }

    printf("employee_Basic_Salary= \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%f",&Employee[i].Basic_Salary);
    }

    printf("employee_TA(Travel_Allowance) \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%f",&Employee[i].TA);
    }

    printf("employee_DA(Dearness Allowance) \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%f",&Employee[i].DA);
    }

    printf("employee_HRA(Human Resource Allowance) \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);
        scanf("%f",&Employee[i].HRA);
    }

    printf("employee_PF(Provident Fund)(%) \n");
    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);

        scanf("%f",&Employee[i].PF);
    }

    printf("employee_PT(Professional Tax)(%) \n");

    for(i=0; i<n; i++)
    {
        printf("%d - ",Employee[i].emp_Id);

        scanf("%f",&Employee[i].PT);
    }

    for(i=0; i<n; i++) {
        //Here Calculate PF
        temp[i]=(Employee[i].Basic_Salary*Employee[i].PF)/100;
    }
    for(i=0; i<n; i++) {
        //Here Calculate PT
        temp1[i]=(Employee[i].Basic_Salary*Employee[i].PT)/100;
    }
    for(i=0; i<n; i++) {
        //Here Sum Of PF And PT
        temp2[i]=temp[i] + temp1[i];
    }
    for(i=0; i<n; i++) {
        Employee[i].Gross_Salary=(Employee[i].Basic_Salary-temp2[i])+Employee[i].TA+Employee[i].DA+Employee[i].HRA;
    }
    printf("\n");
    printf("%d Employees Salary Report",n);

    printf(" \n");

    for(i=0; i<n; i++) {

        printf("----->ID=%d \nName=%s \nDepartment=%s \nDesignation=%s \nBasic_Salary=%.2f \nTravel Allowance=%.2f \nDA(Dearness Allowance=%.2f \nHRA(Human Resource Allowance=%.2f \nProvident Fund(%.2f)=%.2f \n Professional Tax(%.2f)=%.2f \nGross_Salary(Basic_Salary - (PF + PT))=%.2f \n \n",Employee[i].emp_Id,Employee[i].emp_name,Employee[i].dept,Employee[i].Designation,Employee[i].Basic_Salary,Employee[i].TA,Employee[i].DA,Employee[i].HRA,Employee[i].PF,temp[i],Employee[i].PT,
               temp1[i],Employee[i].Gross_Salary);

    }

}