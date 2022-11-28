#include <iostream>
#include<stdio.h>
#include <iomanip>
#include <cmath>
#include <stdlib.h>
using namespace std;
/*--------------------------------------------------------------------------
Sequence And Progression class 11 To 355
Method Access Function 359 to 491
--------------------------------------------------------------------------*/
class Sequence_And_Progression
{
  public:
    int G;

    //Arithmetic Progression
    float AP(float a, float d, float n)
    {
        float Series, b, G;
        b = a;
        G = d;
        cout << " \n";
        if (G == 3)
        {
            cout << "AP Terms:\n \n";
        }
        else
        {
            cout << "AP Terms:\n \n";
        }
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << b << " \n";
            }
            else
            {
                b += G;
                Series = b;
                cout << i + 1 << " - " << Series << " \n";
            }
        }
        cout << " \n";
        float an;
        an = a + ((n - 1) * d);
        return an;
    }

    //Arithmetic Progression Sum
    float AP_Sum(float a, float d, float n)
    {
        float Series, b, G;
        b = a;
        G = d;
        cout << " \n";
        cout << " Terms:\n \n";
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << b << " \n";
            }
            else
            {
                b += G;
                Series = b;
                cout << i + 1 << " - " << Series << " \n";
            }
        }
        cout << "\n";
        float Sum;
        Sum = (n / 2) * (2 * a + (n - 1) * d);
        return Sum;
    }

    //Geometric Progression
    double GP(double a, float r, float n)
    {
        double Series, b, G;
        b = a;
        G = (double)r;
        cout << " \n";
        cout << " Terms:\n \n";
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << b << " \n";
            }
            else
            {
                b *= G;
                Series = b;
                cout << i + 1 << " - " << Series << " \n";
            }
        }
        cout << "\n"
             << n << "th Term In GP:" << Series << " \n";
        cout << " \n";
        double an;
        r = pow(r, n - 1);
        an = a * r;
        return an;
    }

    //Geometric Progression Sum
    double GP_Sum(double a, float r, float n)
    {
        double Series, b, G;
        b = a;
        G = (double)r;
        cout << " \n";
        cout << " Terms:\n \n";
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << b << " \n";
            }
            else
            {
                b *= G;
                Series = b;
                cout << i + 1 << " - " << Series << " \n";
            }
        }
        cout << " \n";
        double Sum;
        Sum = (a * (1 - pow(r, n))) / (1 - r);
        return Sum;
    }

    //Harmonic Progression
    float HP(float a, float d, float n)
    {
        float Series, b, G;
        b = a;
        G = d;
        cout << " \n";
        cout << "HP Terms:\n \n";
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << b << " \n";
            }
            else
            {
                b += G;
                Series = b;
                cout << i + 1 << " - " << Series << " \n";
            }
        }

        cout << " \n";
        float an;
        an = a + ((n - 1) * d);
        return an;
    }

    //Arithmetic Sequence
    float A_Sequence(float a, float f, int n)
    {
        float A;
        float A_S;
        cout << " Terms:\n \n";
        A = a;
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << A << " \n";
            }
            else
            {
                A += f;
                cout << i + 1 << " - " << A << " \n";
            }
        }
        cout << " \n";

        for (int i = 0; i < n; i++)
        {
            A_S = a + (f * (n - 1));
        }
        return A_S;
    }

    //Arithmetic Sequence Sum
    float A_Sequence_Sum(float a, float f, int n)
    {
        float A_S;
        float Sum;

        for (int i = 0; i < n; i++)
        {
            A_S = a + (f * (n - 1));
        }

        Sum = (n * (a + A_S)) / 2;

        return Sum;
    }

    //Geometric Sequence
    void G_Sequence(double a, float r, int n)
    {
        double A;
        A = a;
        cout << " Terms:\n \n";

        for (int i = 0; i < n - 1; i++)
        {
            a *= r;
        }
        for (int i = 0; i < n; i++)
        {
            if (i == 0)
            {
                cout << i + 1 << " - " << A << " \n";
            }
            else
            {
                A = A * r;
                cout << i + 1 << " - " << A << " \n";
            }
        }

        cout << " \n";
        cout << "Geometric Sequence " << n << "th Term:" << A;
    }

    //Geometric Sequence Sum
    void G_Sequence_Sum(double a, float r, int n)
    {
        double G_S;
        G_S = (a * (1 - pow(r, n))) / (1 - r);
        cout << "Sum Sn=" << G_S;
    }

    //Fibonacci Series
    int Fibonacci(int n)
    {
        if (n <= 1)
        {
            return n;
        }
        return Fibonacci(n - 1) + Fibonacci(n - 2);
    }

    //Fibonacci Series Sum
    int Fibonacci_Sum(int n)
    {
        int Sum = 0;
        cout << " Terms: \n \n";
        for (int i = 0; i < n; i++)
        {
            if (i == 1)
            {
                cout << i << " - " << Fibonacci(i) << " \n";
            }
            else
            {
                cout << i << " - " << Fibonacci(i) << " \n";
            }
        }
        for (int i = 0; i < n; i++)
        {
            Sum += Fibonacci(i);
        }
        cout << "\n";
        cout << "Sum=" << Sum << " \n";
    }

    //Arithmetic Mean
    void AM()
    {
        int n;
        float Sum = 0, Mean;
        cout << "Enter Number Of Observations=";
        cin >> n;
        float A[n];
        cout << "\n";
        cout << "NOTE:\nAll Inputs Has In Fully Ascending \nOr Decending Order \n \n";
        cout << "Enter " << n << " Observations: \n";
        for (int i = 0, K = 0; i < n, K < n; i++, K++)
        {
            cout << K + 1 << " - ";
            cin >> A[i];
        }
        for (int i = 0; i < n; i++)
        {
            Sum += A[i];
        }
        cout << " \n";
        cout << "Sum=" << Sum;
        Mean = Sum / n;
        cout << "Arithmetic Mean(AM)=" << Mean;
    }

    //Geometric Mean
    void GM()
    {
        int n;
        float Mean = 1;
        cout << "Enter Number Of Observations=";
        cin >> n;
        float A[n];
        cout << "\n";
        cout << "NOTE\n:All Inputs Has In Fully Ascending \nOr Decending Order \n \n";
        cout << "Enter " << n << " Observations:\n";

        for (int i = 0, K = 0; i < n, K < n; i++, K++)
        {
            cout << K + 1 << " - ";
            cin >> A[i];
        }
        for (int i = 0; i < n; i++)
        {
            Mean = Mean * A[i];
        }
        cout << " \n";
        for (int i = 0; i < (n / 2); i++)
        {
            Mean = sqrt(Mean);
        }
        cout << "Geometric Mean(GM)=" << Mean;
    }

    //Harmonic Mean
    void HM()
    {
        int n;
        float Mean = 0;
        cout << "Enter Number Of Observations=";
        cin >> n;
        float A[n];
        cout << "\n";
        cout << "NOTE:\nAll Inputs Has In Fully Ascending \nOr Decending Order \n \n";
        cout << "Enter " << n << " Observations:\n";
        for (int i = 0, K = 0; i < n, K < n; i++, K++)
        {
            cout << K + 1 << " - ";
            cin >> A[i];
        }
        for (int i = 0; i < n; i++)
        {
            Mean += 1 / A[i];
        }
        cout << " \n";
        Mean = n / Mean;
        cout << "Harmonic Mean(HM)=" << Mean;
    }
};
/*-------------------------------------------------------------------------
Sequence And Progression class Methods Access function 359 to 491
-------------------------------------------------------------------------*/
void Sequence_And_Progression_func()
{
    Sequence_And_Progression SP_Obj;

    int r1, n1;
    float n;
    float a, d, f, r;
    int Choice;
    double a1, a2;
    cout << " \t    Sequence And Progression Calculator\n____________________________________________________________\n\n";
    cout << "1-Arithmetic Progression\n2-Geomatric Progrssion\n3-Harmonic Progression\n4-Sum Of Arithmetic Progression\n5-Sum Of Geometric Progression\n6-Arithmetic Sequence\n7-Geometric Sequence\n8-Fibonacci Sequence\n9-Arithmetic Mean\n10-Geometric Mean\n11-Harmonic Mean \n";
    cout << "\n";
    cout << "Enter Your Choice=";
    cin >> Choice;
    SP_Obj.G = Choice;
    while (Choice < 1 || Choice > 11)
    {
        cout << "Enter Valid Input=";
        cin >> Choice;
    }
    if (Choice < 9 && Choice < 10 && Choice < 11)
    {
        if (Choice == 8)
        {
            cout << "Enter n Term In integer Value(an):\n";
            cin >> n1;
        }
        else
        {
            if (Choice == 3)
            {
                cout << "Enter First AP Term(a1)=";
                cin >> a;
            }
            else if (Choice == 2 || Choice == 7 || Choice == 5)
            {
                cout << "Enter First Term(a1)=";
                cin >> a1;
            }
            else
            {
                cout << "Enter First Term(a1)=";
                cin >> a;
            }
            if (Choice == 1 || Choice == 3 || Choice == 4)
            {
                cout << "Enter Common Difference(d)=";
                cin >> d;
            }
            else if (Choice == 6)
            {
                cout << "Enter Common Difference(f)=";
                cin >> f;
            }
            else
            {
                cout << "Enter Ratio(r)=";
                cin >> r;
            }
            if (Choice == 6 || Choice == 7)
            {
                cout << "Enter nth Term In Integer(an)=";
                cin >> n1;
            }
            else
            {
                cout << "Enter nth Term(an)=";
                cin >> n;
            }
        }
        cout << "\n";
        float A = n;

        switch (Choice)
        {
        case 1:
            a2 = SP_Obj.AP(a, d, n);
            cout << A << "th Term Of AP:" << a2 << " \n";
            break;

        case 2:
            A, SP_Obj.GP(a1, r, n);
            break;

        case 3:
            a2 = SP_Obj.AP(a, d, n);
            cout << "\n"
                 << A << "th Term Of AP=" << a2 << " \n";
            cout << "\n";
            a2 = SP_Obj.HP(a, d, n);
            cout << A << "th Term Of HP=" << a2 << " \n";
            break;

        case 4:
            a2 = SP_Obj.AP_Sum(a, d, n);
            cout << "Sum Sn=" << a2 << " \n";
            break;

        case 5:
            a2 = SP_Obj.GP_Sum(a1, r, n);
            cout << "Sum Sn=" << a2;
            break;

        case 6:
            a2 = SP_Obj.A_Sequence(a, f, n1);
            cout << "\nArithmetic Sequence " << n1 << "th Term=" << a2 << " \n";
            a2 = SP_Obj.A_Sequence_Sum(a, f, n1);
            cout << "Sum Sn=" << a2 << " \n";
            break;

        case 7:
            SP_Obj.G_Sequence(a1, r, n1);
            SP_Obj.G_Sequence_Sum(a1, r, n1);
            break;

        case 8:
            SP_Obj.Fibonacci_Sum(n1);
            break;

        case 9:
            SP_Obj.AM();
            break;

        case 10:
            SP_Obj.GM();
            break;

        case 11:
            SP_Obj.HM();
            break;
        }
    }
}

/*-------------------------------------------------------------------------Digital Storage class 497 To 1705
Method Access Function 1710 to 2046
-------------------------------------------------------------------------*/

class Digital_Storage
{
  public:
    //class bit
    class bit
    {
      public:
        void Byte(float A)
        {
            cout << A / 8 << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A / 8000 << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A / 8192 << " Kibibyte \n";
        }

        void Megabyte(float A)
        {
            cout << A / (8e+6) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A / (8.389e+6) << " Mibibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / (8e+9) << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / (8.59e+9) << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / (8e+12) << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (8.796e+12) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (8e+15) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (9.007e+15) << " Pebibyte \n";
        }
    };

    //Byte Class
    class Byte
    {
      public:
        void bit(float A)
        {
            cout << A * 8 << " bit \n";
        }

        void Kilobyte(float A)
        {
            cout << A / 1000 << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A / 1024 << " Kibibyte \n";
        }

        void Megabyte(float A)
        {
            cout << A / (1e+6) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A / (1.049e+6) << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / (1e+9) << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / (1.074e+9) << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / (1e+12) << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (1.1e+12) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (1e+15) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.126e+15) << " Pebibyte \n";
        }
    };

    //Kilobyte Class

    class Kilobyte
    {
      public:
        void bit(float A)
        {
            cout << A * 8000 << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * 1000 << " Byte \n";
        }

        void Kibibyte(float A)
        {
            cout << A / 1.024 << " Kibibyte \n";
        }

        void Megabyte(float A)
        {
            cout << A / 1000 << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A / 1049 << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / (1e+6) << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / (1.074e+6) << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / (1e+9) << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (1.1e+9) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (1e+12) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.126e+12) << " Pebibyte \n";
        }
    };
    //Kibibyte Class
    class Kibibyte
    {
      public:
        void bit(float A)
        {
            cout << A * 8192 << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * 1024 << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * 1.024 << " Kilobyte \n";
        }

        void Megabyte(float A)
        {
            cout << A / 977 << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A / 1024 << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / 976562 << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / (1.049e+6) << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / (9.766e+8) << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (1.074e+9) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (9.766e+11) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.1e+12) << " Pebibyte \n";
        }
    };

    //Class Megabyte
    class Megabyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8e+6) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1e+6) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * 1000 << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * 976.563 << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A / 1.049 << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / 1000 << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / 1074 << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / (1e+6) << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (1.1e+6) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (1e+9) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.126e+9) << " Pebibyte \n";
        }
    };

    //Class Mebibyte

    class Mebibyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8.389e+6) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1.049e+6) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * 1048.58 << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * 1.04858 << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * 1.049 << " Megabyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A / 954 << " Gigabyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / 1024 << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / 953674 << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / (1.049e+6) << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (9.537e+8) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.074e+9) << " Pebibyte \n";
        }
    };

    //Gigabyte Class

    class Gigabyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8e+9) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1e+6) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1e+9) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * 976563 << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * 1000 << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * 953.674 << " Mebibyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A / 1.074 << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / 1000 << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / 1100 << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / (1e+6) << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.126e+9) << " Pebibyte \n";
        }
    };

    //Gibibyte
    class Gibibyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8.59e+9) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1.074e+9) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1.074e+9) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * (1.049e+6) << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * 1073.74 << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * 1024 << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A * 1.07374 << " Gigabyte \n";
        }

        void Terabyte(float A)
        {
            cout << A / 931 << " Terabyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / 1024 << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / 931323 << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / (1.49e+6) << " Pebibyte \n";
        }
    };

    //Terabyte Class
    class Terabyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8e+12) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1e+12) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1e+9) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * (9.766e+8) << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * (1e+6) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * 953674 << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A * 1000 << " Gibibyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A * 931.323 << " Gibibyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A / 1.1 << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / 1000 << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / 1126 << " Pebibyte \n";
        }
    };

    //Tebibyte Class
    class Tebibyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8.796e+12) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1.1e+12) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1.1e+9) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * (1.074e+9) << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * (1.1e+6) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * (1.049e+6) << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A * 1099.51 << " Gibibyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A * 1024 << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A * 1.09951 << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A / 909 << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / 1024 << " Pebibyte \n";
        }
    };

    //Class Petabyte
    class Petabyte
    {
      public:
        void bit(float A)
        {
            cout << A * (8e+15) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1e+15) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1e+12) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * (9.766e+11) << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * (1e+9) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * (9.537e+8) << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A * (1e+6) << " Gibibyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A * 931323 << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A * 1000 << " Tebibyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A * 909.493 << " Petabyte \n";
        }

        void Pebibyte(float A)
        {
            cout << A / 1.126 << " Pebibyte \n";
        }
    };

    //Pebibyte Class
    class Pebibyte
    {
      public:
        void bit(float A)
        {
            cout << A * (9.007e+15) << " bit \n";
        }

        void Byte(float A)
        {
            cout << A * (1.126e+15) << " Byte \n";
        }

        void Kilobyte(float A)
        {
            cout << A * (1.126e+12) << " Kilobyte \n";
        }

        void Kibibyte(float A)
        {
            cout << A * (1.1e+12) << " Megabyte \n";
        }

        void Megabyte(float A)
        {
            cout << A * (1.126e+9) << " Megabyte \n";
        }

        void Mebibyte(float A)
        {
            cout << A * (1.074e+9) << " Mebibyte \n";
        }

        void Gigabyte(float A)
        {
            cout << A * (1.126e+6) << " Gibibyte \n";
        }

        void Gibibyte(float A)
        {
            cout << A * (1.049e+6) << " Gibibyte \n";
        }

        void Terabyte(float A)
        {
            cout << A * 1125.9 << " Tebibyte \n";
        }

        void Tebibyte(float A)
        {
            cout << A * 1024 << " Tebibyte \n";
        }

        void Petabyte(float A)
        {
            cout << A * 1.1259 << " Petabyte \n";
        }
    };

    //Choice class
    class Choice
    {
      public:
        void bit(int Choice2, Digital_Storage::bit Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.Byte(A);
                break;
            case 2:
                Obj.Kilobyte(A);
                break;
            case 3:
                Obj.Kibibyte(A);
                break;
            case 4:
                Obj.Megabyte(A);
                break;
            case 5:
                Obj.Mebibyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Byte(int Choice2, Digital_Storage::Byte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Kilobyte(A);
                break;
            case 3:
                Obj.Kibibyte(A);
                break;
            case 4:
                Obj.Megabyte(A);
                break;
            case 5:
                Obj.Mebibyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Kilobyte(int Choice2, Digital_Storage::Kilobyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kibibyte(A);
                break;
            case 4:
                Obj.Megabyte(A);
                break;
            case 5:
                Obj.Mebibyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Kibibyte(int Choice2, Digital_Storage::Kibibyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Megabyte(A);
                break;
            case 5:
                Obj.Mebibyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Megabyte(int Choice2, Digital_Storage::Megabyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Mebibyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Mebibyte(int Choice2, Digital_Storage::Mebibyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Gigabyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Gigabyte(int Choice2, Digital_Storage::Gigabyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gibibyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Gibibyte(int Choice2, Digital_Storage::Gibibyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gigabyte(A);
                break;
            case 8:
                Obj.Terabyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Terabyte(int Choice2, Digital_Storage::Terabyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gigabyte(A);
                break;
            case 8:
                Obj.Gibibyte(A);
                break;
            case 9:
                Obj.Tebibyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Tebibyte(int Choice2, Digital_Storage::Tebibyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gigabyte(A);
                break;
            case 8:
                Obj.Gibibyte(A);
                break;
            case 9:
                Obj.Terabyte(A);
                break;
            case 10:
                Obj.Petabyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Petabyte(int Choice2, Digital_Storage::Petabyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gigabyte(A);
                break;
            case 8:
                Obj.Gibibyte(A);
                break;
            case 9:
                Obj.Terabyte(A);
                break;
            case 10:
                Obj.Tebibyte(A);
                break;
            case 11:
                Obj.Pebibyte(A);
                break;
            }
        }

        void Pebibyte(int Choice2, Digital_Storage::Pebibyte Obj, float A)
        {
            switch (Choice2)
            {
            case 1:
                Obj.bit(A);
                break;
            case 2:
                Obj.Byte(A);
                break;
            case 3:
                Obj.Kilobyte(A);
                break;
            case 4:
                Obj.Kibibyte(A);
                break;
            case 5:
                Obj.Megabyte(A);
                break;
            case 6:
                Obj.Mebibyte(A);
                break;
            case 7:
                Obj.Gigabyte(A);
                break;
            case 8:
                Obj.Gibibyte(A);
                break;
            case 9:
                Obj.Terabyte(A);
                break;
            case 10:
                Obj.Tebibyte(A);
                break;
            case 11:
                Obj.Petabyte(A);
                break;
            }
        }
    };
};

/*-------------------------------------------------------------------------
Digital Storage class Methods Access function 1710 To 2046
-------------------------------------------------------------------------*/
void Digital_Storage_func()
{
    cout << " \t \t  Digital Storage Calculator  \n";
    cout << "____________________________________________________________\n";

    int Choice, Choice2;
    //Class Object nested class
    Digital_Storage::bit bit_Obj;
    Digital_Storage::Byte Byte_Obj;
    Digital_Storage::Kilobyte Kilobyte_Obj;
    Digital_Storage::Kibibyte Kibibyte_Obj;
    Digital_Storage::Megabyte Megabyte_Obj;
    Digital_Storage::Mebibyte Mebibyte_Obj;
    Digital_Storage::Gigabyte Gigabyte_Obj;
    Digital_Storage::Gibibyte Gibibyte_Obj;
    Digital_Storage::Terabyte Terabyte_Obj;
    Digital_Storage::Tebibyte Tebibyte_Obj;
    Digital_Storage::Petabyte Petabyte_Obj;
    Digital_Storage::Pebibyte Pebibyte_Obj;

    //Choice Class Object
    class Digital_Storage::Choice Ch;

    long int Digital_Storage_Amount;

    cout
        << "\n----->Convert From:\n \n";
    cout << " 1-bit             2-Byte \n";
    cout << " 3-Kilobyte        4-Kibibyte \n";
    cout << " 5-Megabyte        6-Mebibyte \n";
    cout << " 7-Gigabyte        8-Gibibyte \n";
    cout << " 9-Terabyte       10-Tebibyte \n";
    cout << "11-Petabyte       12-Pebibyte \n ";

    cout << "\nEnter Your Choice=";
    cin >> Choice;

    while (Choice < 1 || Choice > 12)
    {
        cout << "\nEnter Valid Input=";
        cin >> Choice;
    }
    cout << "\n----------------------------------- \n";
    cout << "Enter Digital Storage Amount=";
    cin >> Digital_Storage_Amount;
    cout << "----------------------------------- \n";
    switch (Choice)
    {
    case 1:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Byte             2-Kilobyte  \n";
        cout << " 3-Kibibyte         4-Megabyte \n";
        cout << " 5-Mebibyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " bit=";

        Ch.bit(Choice2, bit_Obj, Digital_Storage_Amount);
        break;

    case 2:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Kilobyte  \n";
        cout << " 3-Kibibyte         4-Megabyte \n";
        cout << " 5-Mebibyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Petibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Byte=";

        Ch.Byte(Choice2, Byte_Obj, Digital_Storage_Amount);
        break;

    case 3:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-Kibibyte         4-Megabyte \n";
        cout << " 5-Mebibyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Kilobyte=";

        Ch.Kilobyte(Choice2, Kilobyte_Obj, Digital_Storage_Amount);
        break;

    case 4:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Megabyte \n";
        cout << " 5-Mebibyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Kebibyte=";

        Ch.Kibibyte(Choice2, Kibibyte_Obj, Digital_Storage_Amount);
        break;

    case 5:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-Kilobyte         4-Kebibyte \n";
        cout << " 5-Mebibyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Megabyte=";

        Ch.Megabyte(Choice2, Megabyte_Obj, Digital_Storage_Amount);
        break;

    case 6:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Gigabyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Mebibyte=";

        Ch.Mebibyte(Choice2, Mebibyte_Obj, Digital_Storage_Amount);
        break;

    case 7:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gibibyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Gigabyte=";

        Ch.Gigabyte(Choice2, Gigabyte_Obj, Digital_Storage_Amount);
        break;

    case 8:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gigabyte         8-Terabyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Gibibyte=";

        Ch.Gibibyte(Choice2, Gibibyte_Obj, Digital_Storage_Amount);
        break;

    case 9:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gigabyte         8-Gibibyte \n";
        cout << " 9-Tebibyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Terabyte=";

        Ch.Terabyte(Choice2, Terabyte_Obj, Digital_Storage_Amount);
        break;

    case 10:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gigabyte         8-Gibibyte \n";
        cout << " 9-Terabyte        10-Petabyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Tebibyte=";

        Ch.Tebibyte(Choice2, Tebibyte_Obj, Digital_Storage_Amount);
        break;

    case 11:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gigabyte         8-Gibibyte \n";
        cout << " 9-Terabyte        10-Tebibyte \n";
        cout << "11-Pebibyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Petabyte=";

        Ch.Petabyte(Choice2, Petabyte_Obj, Digital_Storage_Amount);
        break;

    case 12:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-bit              2-Byte  \n";
        cout << " 3-kilobyte         4-Kibibyte \n";
        cout << " 5-Megabyte         6-Mebibyte \n";
        cout << " 7-Gigabyte         8-Gibibyte \n";
        cout << " 9-Terabyte        10-Tebibyte \n";
        cout << "11-Petabyte \n";

        cout << "\nEnter Your Choice=";
        cin >> Choice2;

        while (Choice2 < 1 || Choice2 > 11)
        {
            cout << "\nEnter Valid Input=";
            cin >> Choice2;
        }

        cout << "\n"
             << Digital_Storage_Amount << " Pebibyte=";

        Ch.Pebibyte(Choice2, Pebibyte_Obj, Digital_Storage_Amount);
        break;
    }
}

/*--------------------------------------------------------------------------
Length class 2052 To 2657
class Methods Access function 2688 To 3299
--------------------------------------------------------------------------*/
class Length
{
  public:
    //Kilometre
    class Kilometre
    {
      public:
        void Meter(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * 1000 << " Meters";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * 100000 << " Centimeter";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * (1e+6) << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * (1e+9) << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * (1e+12) << " Nanometer";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A / 1.609 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * 1094 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * 3281 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A * 39370 << " Inch";
        }
        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Kilometre=" << setprecision(10) << A / 1.852 << " Nautical Mile";
        }
    };

    //Meter Class
    class Meter
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A / 1000 << " Kilometre";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * 100 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * 1000 << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * (1e+6) << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * (1e+9) << " Namometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A / 1609 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * 1.094 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * 3.281 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A * 39.37 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Meter=" << setprecision(10) << A / 1852 << " Nautical_Mile";
        }
    };

    //Centimetre Class
    class Centimetre
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << "Centimeter=" << setprecision(10) << A / 100000 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 100 << " Meter";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A * 10 << " millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A * 10000 << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A * (1e+7) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 160934 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 91.44 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 30.48 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 2.54 << " Inch";
        }
        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Centimeter=" << setprecision(10) << A / 185200 << " Nautical Mile";
        }
    };

    //Millimetre Class
    class Millimetre
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / (1e+6) << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(10) << A << " Millimetre=" << setprecision(20) << A / 1000 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / 10 << " Centimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A * 1000 << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A * (1e+6) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / (1.609e+6) << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / 914 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / 305 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / 25.4 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Millimetre=" << setprecision(10) << A / 185200 << " Nautical Mile";
        }
    };

    //Micrometres Class
    class Micrometre
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / (1e+9) << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / (1e+6) << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / 10000 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / 1000 << " Millimetre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A * 1000 << " Namometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / (1.609e+9) << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / 914400 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Micrometre=" << setprecision(10) << A / 304800 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Micrometre =" << setprecision(10) << A / 25400 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Micrometre =" << setprecision(10) << A / (1.852e+9) << " Nautical_Mile";
        }
    };

    //Nanometre Class
    class Nanometre
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1e+12) << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1e+9) << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1e+7) << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1e+6) << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / 1000 << " Micrometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1.609e+12) << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (9.144e+8) << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (3.048e+8) << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (2.54e+7) << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Nanometre =" << setprecision(10) << A / (1.852e+12) << " Nautical_Mile";
        }
    };

    //Mile Class
    class Mile
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 1.609 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 1609 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 160934 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * (1.609e+6) << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * (1.609e+9) << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A / (1.609e+12) << " Nanometre";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 1760 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 5280 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A * 63360 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Mile =" << setprecision(10) << A / 1.151 << " Nautical_Mile";
        }
    };

    //Yard Class
    class Yard
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(10) << A << " Yard =" << setprecision(20) << A / 1904 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A / 1.904 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * 91.44 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * 914 << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * 914400 << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * (9.144e+8) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A / 1760 << " Mile";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * 3 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A * 36 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Yard =" << setprecision(10) << A / 2025 << " Nautical_Mile";
        }
    };

    //Foot Class
    class Foot
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A / 3281 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A / 3.281 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A * 30.48 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A * 305 << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A * 304800 << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A * (3.048e+8) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A / 5280 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A / 3 << " Yard";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A * 12 << " Inch";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Foot =" << setprecision(10) << A / 6076 << " Nautical_Mile";
        }
    };

    //Inch Class
    class Inch
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 39370 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 39.37 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A * 2.54 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A * 25.4 << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A * 25400 << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A * (2.54e+7) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 63360 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 36 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 12 << " Foot";
        }

        void Nautical_Mile(float A)
        {
            cout << setprecision(20) << A << " Inch =" << setprecision(10) << A / 72913 << " Nautical_Mile";
        }
    };

    //Nautical Mile Class
    class Nautical_Mile
    {
      public:
        void Kilometre(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 1.852 << " Kilometre";
        }

        void Meter(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 1852 << " Meter";
        }

        void Centimetre(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 185200 << " Centimetre";
        }

        void Millimetre(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * (1.852e+6) << " Millimetre";
        }

        void Micrometre(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * (1.852e+9) << " Micrometre";
        }

        void Nanometre(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * (1.852e+12) << " Nanometre";
        }

        void Mile(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 1.151 << " Mile";
        }

        void Yard(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 2025 << " Yard";
        }

        void Foot(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 6076 << " Foot";
        }

        void Inch(float A)
        {
            cout << setprecision(20) << A << " Nautical Mile =" << setprecision(10) << A * 72913 << " Nautical_Mile";
        }
    };
};

/*-------------------------------------------------------------------------
Length class Methods Access function 2662 to 3276
-------------------------------------------------------------------------*/
void Length_func()
{
    cout << " \t \t     Length Calculator \n____________________________________________________________";
    //Class Object
    Length::Kilometre Km;
    Length::Meter m;
    Length::Centimetre cm;
    Length::Millimetre Mm;
    Length::Micrometre mm;
    Length::Nanometre nm;
    Length::Mile M;
    Length::Yard Y;
    Length::Foot F;
    Length::Inch I;
    Length::Nautical_Mile NM;

    int Choice, Choice2;
    float A;

    cout << "\n----->Convert From:\n \n";
    cout << " 1-Kilometre        2-Meter \n";
    cout << " 3-Centimetre       4-Millimetre \n";
    cout << " 5-Micrometres      6-Nanometre \n";
    cout << " 7-Mile             8-Yard \n";
    cout << " 9-Foot            10-Inch \n";
    cout << "11-Nautical Mile \n";
    cout << " \n__________________________________ \n";
    cout << "Enter Your Choice=";
    cin >> Choice;
    cout << "__________________________________ \n";
    while (Choice < 1 || Choice > 11)
    {
        cout << "\n__________________________________ \n";
        cout << "Enter Valid Input=";
        cin >> Choice;
        cout << "__________________________________ \n";
    }
    cout << "\n----------------------------------- \n";
    cout << "Enter Length Amount=";
    cin >> A;
    cout << "----------------------------------- \n";

    //Switch Inside Switch//
    switch (Choice)
    {
    case 1:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Meter            2-Centimetre \n";
        cout << " 3-Millimetre       4-Micrometre \n";
        cout << " 5-Nanometre        6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            Km.Meter(A);
            break;
        case 2:
            Km.Centimetre(A);
            break;
        case 3:
            Km.Millimetre(A);
            break;
        case 4:
            Km.Micrometre(A);
            break;
        case 5:
            Km.Nanometre(A);
            break;
        case 6:
            Km.Mile(A);
            break;
        case 7:
            Km.Yard(A);
            break;
        case 8:
            Km.Foot(A);
            break;
        case 9:
            Km.Inch(A);
            break;
        case 10:
            Km.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 2:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Centimetre \n";
        cout << " 3-Millimetre       4-Micrometres \n";
        cout << " 5-Nanometre        6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            m.Kilometre(A);
            break;
        case 2:
            m.Centimetre(A);
            break;
        case 3:
            m.Millimetre(A);
            break;
        case 4:
            m.Micrometre(A);
            break;
        case 5:
            m.Nanometre(A);
            break;
        case 6:
            m.Mile(A);
            break;
        case 7:
            m.Yard(A);
            break;
        case 8:
            m.Foot(A);
            break;
        case 9:
            m.Inch(A);
            break;
        case 10:
            m.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 3:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Millimetre       4-Micrometres \n";
        cout << " 5-Nanometre        6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            cm.Kilometre(A);
            break;
        case 2:
            cm.Meter(A);
            break;
        case 3:
            cm.Millimetre(A);
            break;
        case 4:
            cm.Micrometre(A);
            break;
        case 5:
            cm.Nanometre(A);
            break;
        case 6:
            cm.Mile(A);
            break;
        case 7:
            cm.Yard(A);
            break;
        case 8:
            cm.Foot(A);
            break;
        case 9:
            cm.Inch(A);
            break;
        case 10:
            cm.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 4:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Micrometres \n";
        cout << " 5-Nanometre        6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            Mm.Kilometre(A);
            break;
        case 2:
            Mm.Meter(A);
            break;
        case 3:
            Mm.Centimetre(A);
            break;
        case 4:
            Mm.Micrometre(A);
            break;
        case 5:
            Mm.Nanometre(A);
            break;
        case 6:
            Mm.Mile(A);
            break;
        case 7:
            Mm.Yard(A);
            break;
        case 8:
            Mm.Foot(A);
            break;
        case 9:
            Mm.Inch(A);
            break;
        case 10:
            Mm.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 5:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Nanometre        6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";
        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer_____________\n";
        switch (Choice2)
        {
        case 1:
            mm.Kilometre(A);
            break;
        case 2:
            mm.Meter(A);
            break;
        case 3:
            mm.Centimetre(A);
            break;
        case 4:
            mm.Millimetre(A);
            break;
        case 5:
            mm.Nanometre(A);
            break;
        case 6:
            mm.Mile(A);
            break;
        case 7:
            mm.Yard(A);
            break;
        case 8:
            mm.Foot(A);
            break;
        case 9:
            mm.Inch(A);
            break;
        case 10:
            mm.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 6:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Mile \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            nm.Kilometre(A);
            break;
        case 2:
            nm.Meter(A);
            break;
        case 3:
            nm.Centimetre(A);
            break;
        case 4:
            nm.Millimetre(A);
            break;
        case 5:
            nm.Micrometre(A);
            break;
        case 6:
            nm.Mile(A);
            break;
        case 7:
            nm.Yard(A);
            break;
        case 8:
            nm.Foot(A);
            break;
        case 9:
            nm.Inch(A);
            break;
        case 10:
            nm.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 7:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Nanometre \n";
        cout << " 7-Yard             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            M.Kilometre(A);
            break;
        case 2:
            M.Meter(A);
            break;
        case 3:
            M.Centimetre(A);
            break;
        case 4:
            M.Millimetre(A);
            break;
        case 5:
            M.Micrometre(A);
            break;
        case 6:
            M.Nanometre(A);
            break;
        case 7:
            M.Yard(A);
            break;
        case 8:
            M.Foot(A);
            break;
        case 9:
            M.Inch(A);
            break;
        case 10:
            M.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 8:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Nanometre \n";
        cout << " 7-Mile             8-Foot \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            Y.Kilometre(A);
            break;
        case 2:
            Y.Meter(A);
            break;
        case 3:
            Y.Centimetre(A);
            break;
        case 4:
            Y.Millimetre(A);
            break;
        case 5:
            Y.Micrometre(A);
            break;
        case 6:
            Y.Nanometre(A);
            break;
        case 7:
            Y.Mile(A);
            break;
        case 8:
            Y.Foot(A);
            break;
        case 9:
            Y.Inch(A);
            break;
        case 10:
            Y.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 9:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Nanometre \n";
        cout << " 7-Mile             8-yard \n";
        cout << " 9-Inch            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            F.Kilometre(A);
            break;
        case 2:
            F.Meter(A);
            break;
        case 3:
            F.Centimetre(A);
            break;
        case 4:
            F.Millimetre(A);
            break;
        case 5:
            F.Micrometre(A);
            break;
        case 6:
            F.Nanometre(A);
            break;
        case 7:
            F.Mile(A);
            break;
        case 8:
            F.Yard(A);
            break;
        case 9:
            F.Inch(A);
            break;
        case 10:
            F.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Nanometre \n";
        cout << " 7-Mile             8-yard \n";
        cout << " 9-Foot            10-Nautical Mile \n \n";

        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            I.Kilometre(A);
            break;
        case 2:
            I.Meter(A);
            break;
        case 3:
            I.Centimetre(A);
            break;
        case 4:
            I.Millimetre(A);
            break;
        case 5:
            I.Micrometre(A);
            break;
        case 6:
            I.Nanometre(A);
            break;
        case 7:
            I.Mile(A);
            break;
        case 8:
            I.Yard(A);
            break;
        case 9:
            I.Foot(A);
            break;
        case 10:
            I.Nautical_Mile(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;

    case 11:
        cout << "\n----->Convert To:\n \n";
        cout << " 1-Kilometre        2-Meter \n";
        cout << " 3-Centimetre       4-Milimetre \n";
        cout << " 5-Micrometres      6-Nanometre \n";
        cout << " 7-Mile             8-yard \n";
        cout << " 9-Foot            10-Inch \n \n";
        cout << "Enter Your Choice=";
        cin >> Choice2;
        while (Choice2 < 1 || Choice2 >= 11)
        {
            cout << "Enter Valid Input=";
            cin >> Choice2;
        }
        cout << "\n_______________Answer______________ \n";
        switch (Choice2)
        {
        case 1:
            NM.Kilometre(A);
            break;
        case 2:
            NM.Meter(A);
            break;
        case 3:
            NM.Centimetre(A);
            break;
        case 4:
            NM.Millimetre(A);
            break;
        case 5:
            NM.Micrometre(A);
            break;
        case 6:
            NM.Nanometre(A);
            break;
        case 7:
            NM.Mile(A);
            break;
        case 8:
            NM.Yard(A);
            break;
        case 9:
            NM.Foot(A);
            break;
        case 10:
            NM.Inch(A);
            break;
        }
        cout << "\n___________________________________ \n";
        break;
    }
}

/*Co-Ordinate and Geometry class 3280 to 3645
Method Access function 3383 to 3395 */
class CoOrdinate_and_Geometry
{
  public:
    float Distance_2(float x1, float y1, float x2, float y2)
    {
        float d;
        printf("\n(x1,y1)=(%.1f, %.1f) \n", x1, y1);
        printf("(x2,y2)=(%.1f, %.1f) \n \n", x2, y2);

        d = sqrt(pow((x2 - x1), 2) + pow((y2 - y1), 2));

        printf("Distance d=%.6f \n", d);
        return d;
    }

    float Distance_3(float x1, float y1, float z1, float x2, float y2, float z2)
    {
        float d;
        printf("\n(x1,y1,z1)=(%.1f, %.1f, %.1f) \n", x1, y1, z1);
        printf("(x2,y2,z2)=(%.1f, %.1f, %.1f) \n \n", x2, y2, z2);

        d = sqrt(pow((x2 - x1), 2) + pow((y2 - y1), 2) + pow((z2 - z1), 2));

        printf("Distance d=%.6f \n", d);
        return d;
    }

    float Gradient(float x1, float y1, float x2, float y2)
    {
        printf("\n(x1,y1)=(%.1f, %.1f) \n", x1, y1);
        printf("(x2,y2)=(%.1f, %.1f) \n ", x2, y2);

        float m;
        m = (y1 - y2) / (x1 - x2);
        printf("\nGradient (m)=%.6f \n", m);
    }

    float MidPoint_2(float x1, float y1, float x2, float y2)
    {
        printf("\n(x1,y1)=(%.1f, %.1f) \n", x1, y1);
        printf("(x2,y2)=(%.1f, %.1f) \n ", x2, y2);

        float A, B;
        A = (x1 + x2) / 2;
        B = (y1 + y2) / 2;

        printf("\nMid Point M(%.1f, %.1f) \n", A, B);
    }

    float MidPoint_3(float x1, float y1, float z1, float x2, float y2, float z2)
    {
        printf("\n(x1,y1,z1)=(%.1f, %.1f, %.1f) \n", x1, y1, z1);
        printf("(x2,y2,z2)=(%.1f, %.1f, %.1f) \n ", x2, y2, z2);
        float A, B, C;
        A = (x1 + x2) / 2;
        B = (y1 + y2) / 2;
        C = (z1 + z2) / 2;
        printf("\nMid Point M(%.1f, %.1f, %.1f) \n", A, B, C);
    }

    float Section_Internal(float x1, float y1, float x2, float y2, float m, float n)
    {
        printf("\n(x1,y1)=(%.1f, %.1f) \n", x1, y1);
        printf("(x2,y2)=(%.1f, %.1f) \n\nRatio:\nm=%.1f  n=%.1f (%.1f : %.1f)\n \n", x2, y2, m, n, m, n);

        float A, B;
        A = ((m * x2) + (n * x1));
        B = ((m * y2) + (n * y1));
        printf("Coordinates Of Point:\n(%.1f/%.1f, %.1f/%.1f)", A, m + n, B, m + n);
        A = ((m * x2) + (n * x1)) / (m + n);
        B = ((m * y2) + (n * y1)) / (m + n);
        printf("=(%.1f, %.1f) \n", A, B);
    }

    float Section_External(float x1, float y1, float x2, float y2, float m, float n)
    {
        printf("\n(x1,y1)=(%.1f, %.1f) \n", x1, y1);
        printf("(x2,y2)=(%.1f, %.1f) \n \nRatio:\nm=%.1f  n=%.1f (%.1f : %.1f)\n \n", x2, y2, m, n, m, n);

        float A, B;

        A = ((m * x2) - (n * x1));
        B = ((m * y2) - (n * y1));
        printf("Coordinates Of Point:\n(%.1f/%.1f, %.1f/%.1f)", A, m - n, B, m - n);
        A = ((m * x2) - (n * x1)) / (m - n);
        B = ((m * y2) - (n * y1)) / (m - n);
        printf("=(%.1f, %.1f) \n", A, B);
    }

    float AOT(float x1, float x2, float x3, float y1, float y2, float y3)
    {
        float AT;
        printf("\nVertices:\nA(%.1f, %.1f), \nB(%.1f, %.1f), \nC(%.1f, %.1f)\n", x1, y1, x2, y2, x3, y3);
        x1 = x1 * (y2 - y3);
        x2 = x2 * (y1 - y3);
        x3 = x3 * (y1 - y2);
        AT = (x1 - x2 + x3);

        printf(" \n");
        printf("Area Of Triangle:\n%.1f/2=%.1f \n", AT, AT / 2);
    }

    /*CoOrdinate And Geometry class Method Access Function 3383 to 3395*/
    void CoOrdinate_and_Geometry_func()
    {
        int Choice, Choice2;
        float x1, y1, z1, x2, y2, z2, x3, y3;
        float m, n;
        CoOrdinate_and_Geometry obj;

        cout << " \t     Co-Ordinate and Geometry Calculator \n____________________________________________________________";
        printf("1-Find Distance\n2-Find Gradient Between Two Points\n3-Find Midpoint\n4-Section Formula\n5-Area Of Triangle \n");
        printf("\n");
        printf("Enter Your Choice=");
        scanf("%d", &Choice);
        while (Choice < 1 || Choice > 5)
        {
            printf("Enter Valid Input=");
            scanf("%d", &Choice);
        }
        printf("\n");

        if (Choice == 1)
        {
            printf("1-Between 2 Points\n2-Between 3 Points\n\nEnter Your Choice=");
            scanf("%d", &Choice2);
            while (Choice2 < 1 || Choice2 > 2)
            {
                printf("Enter Valid Input=");
                scanf("%d", &Choice2);
            }
        }

        else if (Choice == 3)
        {
            printf("1-Between 2 Points\n2-Between 3 Points\n\nEnter Your Choice=");
            scanf("%d", &Choice2);
            while (Choice2 < 1 || Choice2 > 2)
            {
                printf("Enter Valid Input=");
                scanf("%d", &Choice2);
            }
        }

        else if (Choice == 4)
        {
            printf(" \n");
            printf("1-For Internal Section\n2-For External Section\n\nEnter Your Choice=");
            scanf("%d", &Choice2);
            while (Choice2 < 1 || Choice2 > 2)
            {
                printf("Enter Valid Input=");
                scanf("%d", &Choice2);
            }
        }

        if (Choice == 1)
        {
            if (Choice2 == 1)
            {
                printf("\nFormula:\nAB=Sq.Root((x1+x2)^2 + (y1+y2)^2)\n");
                printf("\nEnter Values:\n\nx1=");
                scanf("%f", &x1);
                printf("y1=");
                scanf("%f", &y1);
                printf("x2=");
                scanf("%f", &x2);
                printf("y2=");
                scanf("%f", &y2);
            }
            else
            {
                printf("\nFormula:\nAB=SquareRoot((x1+x2)^2 + (y1+y2)^2 + (z1+z2)^2)\n");
                printf("\nEnter Values:\n\nx1=");
                scanf("%f", &x1);
                printf("y1=");
                scanf("%f", &y1);
                printf("z1=");
                scanf("%f", &z1);
                printf("x2=");
                scanf("%f", &x2);
                printf("y2=");
                scanf("%f", &y2);
                printf("z2=");
                scanf("%f", &z2);
            }
        }
        else if (Choice == 2)
        {
            printf("\nFormula:\nm=(y1-y2) / (x1-x2) \n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f", &x1);
            printf("y1=");
            scanf("%f", &y1);
            printf("x2=");
            scanf("%f", &x2);
            printf("y2=");
            scanf("%f", &y2);
        }

        else if (Choice == 3)
        {
            if (Choice2 == 1)
            {
                printf("\nFormula:\nM((x1+x2)/2, (y1+y2)/2\n");
                printf("\nEnter Values:\n\nx1=");
                scanf("%f", &x1);
                printf("y1=");
                scanf("%f", &y1);
                printf("x2=");
                scanf("%f", &x2);
                printf("y2=");
                scanf("%f", &y2);
            }
            else
            {
                printf("\nFormula:\nM((x1+x2)/2, (y1+y2)/2, (z1+z2)/2 \n");
                printf("\nEnter Values:\n\nx1=");
                scanf("%f", &x1);
                printf("y1=");
                scanf("%f", &y1);
                printf("z1=");
                scanf("%f", &z1);
                printf("x2=");
                scanf("%f", &x2);
                printf("y2=");
                scanf("%f", &y2);
                printf("z2=");
                scanf("%f", &z2);
            }
        }

        else if (Choice == 4)
        {
            if (Choice2 == 1)
            {
                printf("\nFormula:\nx=((m*x2)+(n*x1))/(m+n)\ny=((m*y2)+(n*y1))/(m+n)\n");
            }
            else
            {
                printf("\nFormula:\nx=((m*x2)-(n*x1))/(m-n)\ny=((m*y2)-(n*y1))/(m-n)\n");
            }
            printf("\nEnter Values:\n\nx1=");
            scanf("%f", &x1);
            printf("y1=");
            scanf("%f", &y1);
            printf("x2=");
            scanf("%f", &x2);
            printf("y2=");
            scanf("%f", &y2);
            printf("m=");
            scanf("%f", &m);
            printf("n=");
            scanf("%f", &n);
        }

        else if (Choice == 5)
        {
            printf("\nFormula:\n1/2[x1(y2–y3)+x2(y3–y1)+x3(y1–y2)] \n \n");
            printf("\nEnter Values:\n\nx1=");
            scanf("%f", &x1);
            printf("y1=");
            scanf("%f", &y1);
            printf("x2=");
            scanf("%f", &x2);
            printf("y2=");
            scanf("%f", &y2);
            printf("x3=");
            scanf("%f", &x3);
            printf("y3=");
            scanf("%f", &y3);
        }

        switch (Choice)
        {
        case 1:
            if (Choice2 == 1)
            {
                obj.Distance_2(x1, y1, x2, y2);
            }
            else
            {
                obj.Distance_3(x1, y1, z1, x2, y2, z2);
            }
            break;

        case 2:
            obj.Gradient(x1, y1, x2, y2);
            break;

        case 3:
            if (Choice2 == 1)
            {
                obj.MidPoint_2(x1, y1, x2, y2);
            }
            else
            {
                obj.MidPoint_3(x1, y1, z1, x2, y2, z2);
            }
            break;

        case 4:
            if (Choice == 4 && Choice2 == 1)
            {
                obj.Section_Internal(x1, y1, x2, y2, m, n);
            }
            else
            {
                obj.Section_External(x1, y1, x2, y2, m, n);
            }
            break;
        case 5:
            obj.AOT(x1, x2, x3, y1, y2, y3);
            break;
        }
    }
};

/*Statistics class 3601 to 3909
Method Access function 3912 to 3995
*/
class Statistics
{
  public:
    //Merge()
    void Merge(float A[], int l, int mid, int h)
    {
        int i = l, j = mid + 1, k = l;
        float B[h];
        while (i <= mid && j <= h)
        {
            if (A[i] < A[j])
            {
                B[k] = A[i];
                k++;
                i++;
            }
            else
            {
                B[k] = A[j];
                k++;
                j++;
            }
        }
        while (i <= mid)
        {
            B[k] = A[i];

            k++;
            i++;
        }
        while (j <= h)
        {
            B[k] = A[j];

            k++;
            j++;
        }

        for (int i = l; i <= h; i++)
        {
            A[i] = B[i];
        }
    }

    //MergeSort
    void MergeSort(float A[], int l, int h)
    {
        int mid = (l + h) / 2;
        if (l < h)
        {
            MergeSort(A, l, mid);
            MergeSort(A, mid + 1, h);
            Merge(A, l, mid, h);
        }
    }

    //mean()
    float mean(float A[], int n)
    {
        float mean = 0;

        for (int i = 0; i < n; i++)
        {
            mean += A[i];
        }
        mean /= n;

        return mean;
    }

    //Sum()
    float Sum(float A[], int n)
    {
        float Sum_1 = 0;
        for (int i = 0; i < n; i++)
        {
            Sum_1 = Sum_1 + A[i];
        }
        return Sum_1;
    }

    //median()
    float median(float A[], int n)
    {
        float median = 0;
        int M;
        median = 2 * ((float)(n + 1) / 4);
        M = (int)median;
        if (2 * (n + 1) % 4 == 0)
        {
            return (int)A[M - 1];
        }
        else
        {
            median = (A[M - 1] + A[M]) / 2;
            return median;
        }
    }

    //mode()
    float mode(float A[], int n)
    {
        float mode;
        int Count, maxCount = 0;
        for (int i = 0; i < n; i++)
        {
            Count = 1;
            for (int k = i + 1; k < n; k++)
            {
                if (A[i] == A[k])
                {
                    Count++;
                    if (Count > maxCount)
                    {
                        mode = A[i];
                    }
                }
            }
        }
        return mode;
    }

    //Quartiles()
    void Quartiles(float A[], int n)
    {
        int Q1, Q2, Q3;
        float A1, A2, A3, IQR;
        float Q_1, Q_2, Q_3, Range;
        Q_1 = 1 * ((float)(n + 1) / 4);
        Q1 = (int)Q_1;
        if (1 * (n + 1) % 4 == 0)
        {
            if (Q1 == 1)
            {
                cout << "Q1=" << Q1 << "st Term Is ";
            }
            else if (Q1 == 2)
            {
                cout << "Q1=" << Q1 << "nd Term Is ";
            }
            else if (Q1 == 3)
            {
                cout << "Q1=" << Q1 << "rd Term Is ";
            }
            else
            {
                cout << "Q1=" << Q1 << "th Term Is ";
            }
            A1 = A[Q1 - 1];
            cout << (int)A1 << " \n";
        }
        else
        {
            cout << "Q1=" << Q_1 << "th Term Is ";
            A1 = (A[Q1 - 1] + A[Q1]) / 2;
            cout << A1 << " \n";
        }
        Q_2 = 2 * ((float)(n + 1) / 4);
        Q2 = (int)Q_2;
        if (2 * (n + 1) % 4 == 0)
        {
            if (Q2 == 1)
            {
                cout << "Q2=" << Q2 << "st Term Is ";
            }
            else if (Q2 == 2)
            {
                cout << "Q2=" << Q2 << "nd Term Is ";
            }
            else if (Q2 == 3)
            {
                cout << "Q2=" << Q2 << "rd Term Is ";
            }
            else
            {
                cout << "Q2=" << Q2 << "th Term Is ";
            }
            A2 = A[Q2 - 1];
            cout << (int)A2 << " \n";
        }
        else
        {
            cout << "Q2=" << Q_2 << "th Term Is ";
            A2 = (A[Q2 - 1] + A[Q2]) / 2;
            cout << A2 << " \n";
        }
        Q_3 = 3 * (((float)n + 1) / 4);
        Q3 = (int)Q_3;
        if (3 * (n + 1) % 4 == 0)
        {
            if (Q3 == 1)
            {
                cout << "Q3=" << Q3 << "st Term Is " << Q3;
            }
            else if (Q3 == 2)
            {
                cout << "Q3" << Q3 << "nd Term Is " << Q3;
            }
            else if (Q3 == 3)
            {
                cout << "Q3=" << Q3 << "rd Term Is " << Q3;
            }
            else
            {
                cout << "Q3=" << Q3 << "th Term Is " << Q3;
            }
            A3 = A[Q3 - 1];
            cout << (int)A3 << " \n";
        }
        else
        {
            cout << "Q3=" << Q_3 << "th Term Is ";
            A3 = (A[Q3 - 1] + A[Q3]) / 2;
            cout << A3 << " \n";
        }
        if (2 * (n + 1) % 4 == 0)
        {
            cout << "Median=" << (int)A2 << " \n";
        }
        else
        {
            cout << "Median=" << A2 << " \n";
        }
        IQR = A3 - A1;
        cout << "Interquartile Range(IQR)=" << IQR << " \n";
        cout << "Minimum=" << A[0] << " \n";
        cout << "Maximum=" << A[n - 1] << " \n";
        Range = A[n - 1] - A[0];
        cout << "Range=" << Range << " \n";
    }

    //Min()
    float Min(float A[])
    {
        return A[0];
    }

    //Max()
    float Max(float A[], int n)
    {
        return A[n - 1];
    }

    //Range()
    float Range(float A[], int n)
    {
        return A[n - 1] - A[0];
    }

    //Standard_Deviation()
    float Standerd_Deviation(float A[], int n)
    {
        float Mean;
        float Temp_Sum, Variance = 0;
        float S[n];
        int Choice;
        float P_S_D, S_S_D;
        cout << " \n1-Population Standard Deviation\n2-Sample Standard Deviation\n\n";
        cout << "Enter Your Choice=";
        cin >> Choice;

        while (Choice < 1 || Choice > 2)
        {
            cout << "Enter Valid Input=";
            cin >> Choice;
        }

        if (Choice < 1 || Choice > 2)
        {
        }
        else
        {
            cout << "n=" << n << " \n";
            Mean = mean(A, n);
            cout << "Mean=" << Mean << " \n";
            for (int i = 0; i < n; i++)
            {
                S[i] = A[i] - Mean;
            }
            cout << "Sum(Σx)=" << Sum(A, n) << " \n";
            for (int i = 0; i < n; i++)
            {
                Temp_Sum += pow(S[i], 2);
            }
            cout << "(xi-Mean)^2=" << Temp_Sum << " \n";

            if (Choice == 1)
            {
                Variance = Temp_Sum / n;
                cout << "Variance(σ2)=" << Variance << " \n";
            }
            else
            {
                Variance = Temp_Sum / (n - 1);
                cout << "Variance(σ2)=" << Variance << " \n";
            }
        }
        switch (Choice)
        {
        case 1:
            P_S_D = sqrt(Variance);
            return P_S_D;

        case 2:
            S_S_D = sqrt(Variance);
            return S_S_D;
        }
    }
};

/*Statistics class Method Access function
3912 to 3995*/
void Statistics_func()
{
    cout << "\t \t   Statistics Calculator \n";
    cout << "____________________________________________________________\n";

    cout << "1-Mean\n2-Median\n3-mode\n4-Quartiles\n5-Minumum\n6-Maximum\n7-Range\n8-Standard Deviation\n \n";

    int n, l = 0;
    float SD;
    int Choice;
    Statistics Obj;

    cout << "Enter Your Choice=";
    cin >> Choice;
    while (Choice < 1 || Choice > 8)
    {
        cout << "Enter Valid Input=";
        cin >> Choice;
    }
    cout << "\nhow Much Observations You have?=";
    cin >> n;
    float A[n];
    cout << "\nEnter " << n << " Observations\n";
    for (int i = 0, k = 0; i < n, k < n; i++, k++)
    {
        cout << k + 1 << " - ";
        cin >> A[i];
    }

    cout << " \nObservations: \n";

    for (int i = 0; i < n; i++)
    {
        cout << A[i] << ", ";
    }

    Obj.MergeSort(A, l, n - 1);
    cout << "\n\nObservations In Ascending Order\n";
    for (int k = 0; k < n; k++)
    {
        cout << A[k] << ", ";
    }

    cout << "\n \n";

    switch (Choice)
    {
    case 1:
        cout << "Sum=" << Obj.Sum(A, n) << " \n";
        cout << "Mean=" << Obj.mean(A, n) << " \n";
        break;

    case 2:
        cout << "Sum=" << Obj.Sum(A, n) << " \n";
        cout << "Median=" << Obj.median(A, n) << " \n";
        break;

    case 3:
        cout << "mode=" << Obj.mode(A, n) << " \n";
        break;

    case 4:
        Obj.Quartiles(A, n);
        break;

    case 5:
        cout << "Minimum=" << Obj.Min(A) << " \n";
        break;

    case 6:
        cout << "Maximum=" << Obj.Max(A, n) << " \n";
        break;

    case 7:
        cout << "Range=" << Obj.Range(A, n) << " \n";
        break;

    case 8:
        SD = Obj.Standerd_Deviation(A, n);
        cout << "Standard Deviation=" << SD << " \n";
        break;
    }
}

/*BMI calculator class 4000 to 4040
Method Access function 4044 to 4051*/

class BMI
{
  public:
    float Weight;
    float Height, Feet;
    float result;
    int Choice;

    BMI()
    {
        cout << "Enter your weight (Kg):";
        cin >> Weight;
        cout << "Enter your height (Feet):";
        cin >> Feet;

        Height = Feet / 3.284; //Feet/3.284 We Will Get Meter
        //Formula Of BMI=Weight/(Height In Meter)^2
        result = Weight / pow(Height, 2);
        cout << "\n";
    }

    void Display()
    {
        cout << "Your Body Mass Index is " << result << " \n";

        if (result < 18.5)
        {
            cout << "You Are Underweight!"
                 << " \n";
        }
        else if (result >= 18.5 && result < 25)
        {
            cout << "You Are Normal!"
                 << " \n";
        }
        else
        {
            cout << "You Are Overweight! \n";
        }
    }
};

/*BMI calculator Method Access function
4044 to 4051*/
void BMI_func()
{
    cout << "\t \t  Body Mass Index Calculator \n";
    cout << "____________________________________________________________\n";
    BMI Obj;

    Obj.Display();
}

/*Matrix_Calculator class 4058 to 5141
Method Access Function 5088 to 5141
*/

class Matrix_Calculator
{
    public:
    int Select;
    //Determinant()
    void Determinant()
    {
        int A[9], Determinant, P[9], R[9];
        do
        {
            printf("1 - For 2×2 Matrix \n2 - For 3×3 Matrix \n \n ");
            printf("Enter Your Choice : ");
            scanf("%d", &Select);

            if (Select != 1 && Select != 2)
            {
                printf("Enter Valid Input : \n \n");
            }
        } while (Select != 1 && Select != 2);
        if (Select == 1)
        {
            printf("\nEnter 4 Element Value \n");
            for (int K = 0; K < 4; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[K]);
            }

            printf("\n");
            printf("=>Entered Matrix A\n");
            printf(" \n");
            printf("   +              -");
            printf(" \n");
            printf("|%6d    %6d  |\n", A[0], A[1]);
            printf("|%6d    %6d  |\n \n", A[2], A[3]);
            printf("==========>Determinant Steps :\n");

            printf("\n=+%d*(%d)-%d*(%d) \n", A[0], A[3], A[1], A[2]);

            Determinant = (A[0] *= (A[3])) - (A[1] *= (A[2]));

            Determinant = A[0] - A[1];

            printf("\n=%d - %d", A[0], A[1]);

            printf("\n ");
            if (Determinant == 0)
            {
                printf("\n Column And Row Are Same.");
            }
            printf("\n----->Answer |D|=%d\n", Determinant);
        }
        else
        {
            printf("\nEnter 9 Element Value \n");
            for (int K = 0; K < 9; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[K]);
            }

            printf("\n");
            printf("=>Entered Matrix A\n");
            printf("   +            -            +");
            printf("\n|%6d     %6d     %6d  |\n", A[0], A[1], A[2]);
            printf("|%6d     %6d     %6d  |\n", A[3], A[4], A[5]);
            printf("|%6d     %6d     %6d  |\n\n", A[6], A[7], A[8]);

            printf("===========>Determinant Steps :\n");

            printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[0], A[4], A[8], A[5], A[7], A[1], A[3], A[8], A[5], A[6], A[2], A[3], A[7], A[4], A[6]);

            Determinant = A[0] * (P[0] = (A[4] * A[8])) - (P[1] = (A[5] * A[7])) - A[1] * (P[2] = (A[3] * A[8])) - (P[3] = (A[5] * A[6])) + A[2] * (P[4] = (A[3] * A[7])) - (P[5] = (A[4] * A[6]));

            printf("=+%d*(%d -%d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[0], P[0], P[1], A[1], P[2], P[3], A[2], P[4], P[5]);
            Determinant = A[0] * (R[0] = (P[0] - P[1])) - A[1] * (R[1] = (P[2] - P[3])) + A[2] * (R[2] = (P[4] - P[5]));
            printf("=+%d*(%d)-%d(%d)+%d(%d)", A[0], R[0], A[1], R[1], A[2], R[2]);
            Determinant = (A[0] *= R[0]) - (A[1] *= R[1]) + (A[2] *= R[2]);

            Determinant = A[0] - A[1] + A[2];

            printf("\n=+%d - %d + %d", A[0], A[1], A[2]);

            printf("\n ");

            if (Determinant == 0)
            {
                printf("\n 2 Or 3 Column Or Row Are Same.");
            }
            printf("\n----->Answer |D|=%d\n\n", Determinant);
        }
    }

    //Cramer_Rule()
    void Cramer_Rule()
    {
        int A[11], P[6], B[6], R[6], G6[6], Determinant, D1, D2;
        int P1[6], B1[6], R1[6], D4, D5, D6;
        int P2[6], B2[6], R2[6], B6[6], P6[6], R6[6];
        int K[8], Select;
        char A11[] = "a11=", A12[] = "a12=", A13[] = "a13=";
        char B21[] = "b21=", B22[] = "b22=", B23[] = "b23=";
        char C31[] = "c31=", C32[] = "c32=", C33[] = "c33=";
        char C1[] = "Constant=";
        printf("Cramer's Rule Equation Solve \n");
        do
        {
            printf("\n1 - For 2 Variable Equation\n\n \t+- ax +- ay=Constant\n\t \tOr\n \t+- aa +- ay=Constant\n\n2 - For 3 Variable Equation\n\n \t+- a1x +- a1y+-a1z=Constant\n\t    \t    Or\n \t+-a1a +-a1b +- a1c=Constant\n");
            printf("\nEnter Your Choice : ");
            scanf("%d", &Select);

        } while (Select != 1 && Select != 2);

        if (Select == 1)
        {
            printf("\nEnter 6 Element Value \n");
            for (int i = 0; i < 6; i++)
            {
                if (i == 0)
                {
                    printf("%s", A11);
                }
                else if (i == 1)
                {
                    printf("%s", A12);
                }
                else if (i == 2)
                {
                    printf("%s", C1);
                }
                else if (i == 3)
                {
                    printf("%s", B21);
                }
                else if (i == 4)
                {
                    printf("%s", B22);
                }
                else if (i == 5)
                {
                    printf("%s", C1);
                }
                scanf("%d", &A[i]);
            }
            printf("\n \n");
            printf("Entered Equation\n\n=%dx +% dy=%d  Or  %da + %db=%d\n %dx + %dy=%d  Or  %da+%db=%d", A[0], A[1], A[2], A[0], A[1], A[2], A[3], A[4], A[5], A[3], A[4], A[5]);
            printf("\n \n");
            printf("Entered Equation's Determinant\n");
            printf(" \n");

            printf("   +              -");
            printf(" \n");
            printf("|%6d    %6d  |\n", A[0], A[1]);
            printf("|%6d    %6d  |\n \n", A[3], A[4]);

            printf("==========>Determinant Steps :\n");

            printf("\n=%d*(%d)-%d*(%d) \n", A[0], A[4], A[1], A[3]);

            Determinant = (G6[0] = (A[0] * A[4])) - (G6[1] = (A[1] * A[3]));

            Determinant = G6[0] - G6[1];

            printf("\n=%d - %d", G6[0], G6[1]);

            printf("\n ");
            if (Determinant == 0)
            {
                printf("\n Column And Row Are Same.");

                printf("\n---->Answer |D|=%d\n\n", Determinant);

                printf("---->NOTE:This Determinant Is Equal To 0.So This Equations Has Not Solution .");
            }
            else
            {
                for (int i = 0; i < 2; i++)
                {
                    if (i == 0)
                    {
                        printf("\n(1)\n|Dx| Or |Da| Determinant\n");
                        printf(" \n");

                        printf("   +              -");
                        printf(" \n");
                        printf("|%6d    %6d  |\n", A[2], A[1]);
                        printf("|%6d    %6d  |\n \n", A[5], A[4]);
                        printf("==========>Determinant Steps :\n");

                        printf("\n=%d*(%d)-%d*(%d) \n", A[2], A[4], A[1], A[5]);

                        D1 = (G6[2] = (A[2] * A[4])) - (G6[3] = (A[1] * A[5]));

                        D1 = G6[2] - G6[3];

                        printf("\n=%d - %d", G6[2], G6[3]);
                        printf("\n ");
                        if (D1 == 0)
                        {
                            printf("\nColumn And Row Are Same.");
                        }
                        printf("\n----->Answer |Dx| Or |Da|=%d\n", D1);
                    }
                    else if (i == 1)
                    {
                        printf("\n(2)\n|Dy| Or |Da| Determinant\n");
                        printf(" \n");

                        printf("   +              -");
                        printf(" \n");
                        printf("|%6d    %6d  |\n", A[0], A[2]);
                        printf("|%6d    %6d  |\n \n", A[3], A[5]);
                        printf("==========>Determinant Steps :\n");

                        printf("\n=%d*(%d)-%d*(%d) \n", A[0], A[5], A[2], A[3]);

                        D2 = (G6[4] = (A[0] * A[5])) - (G6[5] = (A[2] * A[3]));

                        D2 = G6[4] - G6[5];

                        printf("\n=%d - %d", G6[4], G6[5]);

                        printf("\n ");
                        if (D2 == 0)
                        {
                            printf("\nColumn And Row Are Same.\n");
                        }
                        printf("\n----->Answer |Dy|=%d\n\n", D2);
                        printf("\n=====>Answers\n");
                        printf("(1)|D|=%d \n\n", Determinant);
                        printf("(2)x=|Dx|/|D|= %d / %d=%d \n\t \tOR\n   a=|Da|/|D|=%d / %d=%d\n\n", D1, Determinant, D1 / Determinant, D1, Determinant, D1 / Determinant);
                        printf("(3)y=|Dy|/|D|= %d / %d=%d \n\t \tOR\n   b=|Db|/|D|=%d / %d=%d\n", D2, Determinant, D2 / Determinant, D2, Determinant, D2 / Determinant);
                    }
                }
            }
        }
        else
        {
            printf("\nEnter 12 Element Value \n");
            for (int K = 0; K <= 11; K++)
            {
                if (K == 0)
                {
                    printf("%s", A11);
                }
                else if (K == 1)
                {
                    printf("%s", A12);
                }
                else if (K == 2)
                {
                    printf("%s", A13);
                }
                else if (K == 3)
                {
                    printf("%s", C1);
                }
                else if (K == 4)
                {
                    printf("%s", B21);
                }
                else if (K == 5)
                {
                    printf("%s", B22);
                }
                else if (K == 6)
                {
                    printf("%s", B23);
                }
                else if (K == 7)
                {
                    printf("%s", C1);
                }
                else if (K == 8)
                {
                    printf("%s", C31);
                }
                else if (K == 9)
                {
                    printf("%s", C32);
                }
                else if (K == 10)
                {
                    printf("%s", C33);
                }
                else if (K == 11)
                {
                    printf("%s", C1);
                }
                scanf("%d", &A[K]);
            }
            printf("\n \n");
            printf("Entered Equation\n\n=%dx+%dy+%dz=%d  Or  %da+%db+%dc=%d\n %dx+%dy+%dz=%d  Or  %da+%db+%dc=%d\n %dx+%dy+%dz=%d  Or  %da+%db+%dc=%d ", A[0], A[1], A[2], A[3], A[0], A[1], A[2], A[3], A[4], A[5], A[6], A[7], A[4], A[5], A[6], A[7], A[8], A[9], A[10], A[11], A[8], A[9], A[10], A[11]);

            printf("\n \n");
            printf("Entered Equation's Determinant\n");
            printf("   +            -            +");
            printf("\n|%6d     %6d     %6d  |\n", A[0], A[1], A[2]);
            printf("|%6d     %6d     %6d  |\n", A[4], A[5], A[6]);
            printf("|%6d     %6d     %6d  |\n\n", A[8], A[9], A[10]);

            printf("==========>Determinant Steps :\n");

            printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[0], A[5], A[10], A[6], A[9], A[1], A[4], A[10], A[6], A[8], A[2], A[4], A[9], A[5], A[8]);

            Determinant = A[0] * (P[0] = (A[5] * A[10])) - (P[1] = (A[6] * A[9])) - A[1] * (P[2] = (A[4] * A[10])) - (P[3] = (A[6] * A[8])) + A[2] * (P[4] = (A[4] * A[9])) - (P[5] = (A[5] * A[8]));

            printf("=+%d*(%d -%d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[0], P[0], P[1], A[1], P[2], P[3], A[2], P[4], P[5]);
            Determinant = A[0] * (R[0] = (P[0] - P[1])) - A[1] * (R[1] = (P[2] - P[3])) + A[2] * (R[2] = (P[4] - P[5]));
            printf("=+%d*(%d)-%d(%d)+%d(%d)", A[0], R[0], A[1], R[1], A[2], R[2]);
            Determinant = (B[0] = (A[0] * R[0])) - (B[1] = (A[1] * R[1])) + (B[2] = (A[2] * R[2]));

            Determinant = (B[0] - B[1]) + B[2];

            printf("\n=+%d - %d + %d", B[0], B[1], B[2]);

            printf("\n ");

            if (Determinant == 0)
            {
                printf("\n 2 Or 3 Column Or Row Are Same.");
                printf("\n----->Answer |D|=%d\n\n", Determinant);
                printf("---->NOTE:Determinant Is Equal To 0.So This Equation Has Not Solution .");
            }
            else
            {
                printf("\n(1)Dx Or Da Determinant\n");
                printf("   +            -            +");
                printf("\n|%6d     %6d     %6d  |\n", A[3], A[1], A[2]);
                printf("|%6d     %6d     %6d  |\n", A[7], A[5], A[6]);
                printf("|%6d     %6d     %6d  |\n\n", A[11], A[9], A[10]);

                printf("=========>Determinant Steps :\n");

                printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[3], A[5], A[10], A[6], A[9], A[1], A[7], A[10], A[6], A[11], A[2], A[7], A[9], A[5], A[11]);

                D4 = A[3] * (P1[0] = (A[5] * A[10])) - (P1[1] = (A[6] * A[9])) - A[1] * (P1[2] = (A[7] * A[10])) - (P1[3] = (A[6] * A[11])) + A[2] * (P1[4] = (A[7] * A[9])) - (P1[5] = (A[5] * A[11]));

                printf("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[3], P1[0], P1[1], A[1], P1[2], P1[3], A[2], P1[4], P1[5]);
                D4 = A[3] * (R1[0] = (P1[0] - P1[1])) - A[1] * (R1[1] = (P1[2] - P1[3])) + A[2] * (R1[2] = (P1[4] - P1[5]));
                printf("=+%d*(%d)-%d(%d)+%d(%d)", A[3], R1[0], A[1], R1[1], A[2], R1[2]);
                D4 = (B1[0] = (A[3] * R1[0])) - (B1[1] = (A[1] * R1[1])) + (B1[2] = (A[2] * R1[2]));

                D4 = (B1[0] - B1[1]) + B1[2];

                printf("\n=+%d - %d + %d", B1[0], B1[1], B1[2]);

                printf("\n ");

                if (D4 == 0)
                {
                    printf("\n 2 Or 3 Column Or Row Are Same.");
                }
                printf("\n----->Answer |Dx| Or |Da|=%d\n\n", D4);

                printf("\n(2)Dy Or Db Determinant\n");
                printf("   +            -            +");
                printf("\n|%6d     %6d     %6d  |\n", A[0], A[3], A[2]);
                printf("|%6d     %6d     %6d  |\n", A[4], A[7], A[6]);
                printf("|%6d     %6d     %6d  |\n\n", A[8], A[11], A[10]);

                printf("=========>Determinant Steps :\n");

                printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[0], A[7], A[10], A[6], A[11], A[3], A[4], A[10], A[6], A[8], A[2], A[4], A[11], A[7], A[8]);

                D5 = A[0] * (P2[0] = (A[7] * A[10])) - (P2[1] = (A[6] * A[11])) - A[3] * (P2[2] = (A[4] * A[10])) - (P2[3] = (A[6] * A[8])) + A[2] * (P2[4] = (A[4] * A[11])) - (P2[5] = (A[7] * A[8]));

                printf("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[0], P2[0], P2[1], A[3], P2[2], P2[3], A[2], P2[4], P2[5]);
                D5 = A[0] * (R2[0] = (P2[0] - P2[1])) - A[3] * (R2[1] = (P2[2] - P2[3])) + A[2] * (R2[2] = (P2[4] - P2[5]));
                printf("=+%d*(%d)-%d(%d)+%d(%d)", A[0], R2[0], A[3], R2[1], A[2], R2[2]);
                D5 = (B2[0] = (A[0] * R2[0])) - (B2[1] = (A[3] * R2[1])) + (B2[2] = (A[2] * R2[2]));

                D5 = (B2[0] - B2[1]) + B2[2];

                printf("\n=+%d - %d + %d", B2[0], B2[1], B2[2]);

                printf("\n ");

                if (D5 == 0)
                {
                    printf("\n 2 Or 3 Column Or Row Are Same.");
                }
                printf("\n----->Answer |Dy| Or |Db|=%d\n\n", D5);

                printf("\n(3)Dz Or Dc Determinant\n");
                printf("   +            -            +");
                printf("\n|%6d     %6d     %6d  |\n", A[0], A[1], A[3]);
                printf("|%6d     %6d     %6d  |\n", A[4], A[5], A[7]);
                printf("|%6d     %6d     %6d  |\n\n", A[8], A[9], A[11]);

                printf("=========>Determinant Steps :\n");

                printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[0], A[5], A[11], A[7], A[9], A[1], A[4], A[11], A[7], A[8], A[3], A[4], A[9], A[5], A[8]);

                D6 = A[0] * (P6[0] = (A[5] * A[11])) - (P6[1] = (A[7] * A[9])) - A[1] * (P6[2] = (A[4] * A[11])) - (P6[3] = (A[7] * A[8])) + A[3] * (P6[4] = (A[4] * A[9])) - (P6[5] = (A[5] * A[8]));

                printf("=+%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[0], P6[0], P6[1], A[1], P6[2], P6[3], A[3], P6[4], P6[5]);
                D6 = A[0] * (R6[0] = (P6[0] - P6[1])) - A[1] * (R6[1] = (P6[2] - P6[3])) + A[3] * (R6[2] = (P6[4] - P6[5]));
                printf("=+%d*(%d)-%d(%d)+%d(%d)", A[0], R6[0], A[1], R6[1], A[3], R6[2]);
                D6 = (B6[0] = (A[0] * R6[0])) - (B6[1] = (A[1] * R6[1])) + (B6[2] = (A[3] * R6[2]));

                D6 = (B6[0] - B6[1]) + B6[2];

                printf("\n=+%d -%d +%d", B6[0], B6[1], B6[2]);

                printf("\n ");

                if (D6 == 0)
                {
                    printf("\n 2 Or 3 Column Or Row Are Same.");
                }
                printf("\n----->Answer |Dz| Or |Dc|=%d\n\n", D6);
                printf("\n=====>Answers\n");
                printf("(1)|D|=%d \n", Determinant);
                printf("\n(2)x=|Dx|/|D|= %d / %d=%d\n\t \tOR \t\na=|Da|/|D|= %d / %d=%d \n \n", D4, Determinant, D4 / Determinant, D4, Determinant, D4 / Determinant);
                printf("(3)y=|Dy|/|D|= %d / %d=%d\n\t \tOR \t\nb=|Db|/|D|= %d / %d=%d \n \n", D5, Determinant, D5 / Determinant, D5, Determinant, D5 / Determinant);
                printf("(4)z=|Dz|/|D|= %d / %d=%d\n\t \tOR \t\nc=|Dc|/|D|= %d / %d=%d \n \n", D6, Determinant, D6 / Determinant, D6, Determinant, D6 / Determinant);
            }
        }
    }

    //Multiplication of Matrix
    void Matrix_Multiplication()
    {
        int A_Row, A_Column, B_Row, B_Column, Select;

        printf("\nTwo Matrix Multiplication (A*B)\n ");
        printf("\nInput For First Matrix\n\nRow=");
        scanf("%d", &A_Row);
        printf("\Column=");
        scanf("%d", &A_Column);
        printf("\nInput For Second Matrix \n\n");

        printf("Row=%d(Second Matrix Row=First Matrix Column)", A_Column);
        printf("\nColumn=");
        scanf("%d", &B_Column);

        int A[A_Row][A_Column], B[A_Column][B_Column];
        int Ans[A_Row][B_Column];

        printf("\nFor First Matrix :\n\nEnter %d Element Values \n", A_Row * A_Column);
        for (int i = 0; i < A_Row; i++)
        {
            for (int K = 0; K < A_Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &A[i][K]);
            }
        }
        printf("\nFor Second Matrix :\n\nEnter %d Element Values \n", A_Column * B_Column);
        for (int i = 0; i < A_Column; i++)
        {
            for (int K = 0; K < B_Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &B[i][K]);
            }
        }
        printf("\n");

        for (int i = 0; i < A_Row; i++)
        {
            for (int K = 0; K < B_Column; K++)
            {
                Ans[i][K] = 0;
            }
        }

        printf("----->Entered Matrices \n \n");
        printf("=>A Matrix\n \n");

        for (int i = 0; i < A_Row; i++)
        {
            for (int K = 0; K < A_Column; K++)
            {
                printf("%4d ", A[i][K]);
            }
            printf("\n");
        }
        printf("\n=>B Matrix\n \n");
        for (int i = 0; i < A_Column; i++)
        {
            for (int K = 0; K < B_Column; K++)
            {
                printf("%4d ", B[i][K]);
            }
            printf("\n");
        }

        for (int i = 0; i < A_Row; i++)
        {
            for (int K = 0; K < B_Column; K++)
            {
                for (int G = 0; G < A_Column; G++)
                {
                    Ans[i][K] += A[i][G] * B[G][K];
                }
            }
        }
        printf("\n=====>Multiplication of Two Matrices (A*B )\n");
        printf("\n");
        for (int i = 0; i < A_Row; i++)
        {
            for (int K = 0; K < B_Column; K++)
            {
                printf("%4d ", Ans[i][K]);
            }
            printf(" \n");
        }
    }

    //Addition of Matrix
    void Matrix_Addition()
    {
        int Row, Column;

        printf("\nAdition of Two Matrices (A+B)\n ");

        printf("\nInput For Two Matrices\n\nRow=");
        scanf("%d", &Row);
        printf("Column=");
        scanf("%d", &Column);

        int A[Row][Column], B[Row][Column];
        int Ans[Row][Column];

        printf("\nFor First Matrix :\n\nEnter %d Element Values \n", Row * Column);
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &A[i][K]);
            }
        }
        printf("\nFor Second Matrix :\n\nEnter %d Element Values \n", Row * Column);
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &B[i][K]);
            }
        }
        printf("\n");

        printf("----->Entered Matrices \n \n");
        printf("=>A Matrix\n\n");

        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", A[i][K]);
            }
            printf("\n");
        }
        printf("\n=>B Matrix\n\n");
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", B[i][K]);
            }
            printf("\n");
        }

        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                Ans[i][K] = A[i][K] + B[i][K];
            }
        }

        printf("\n=====>Addition of Two Matrices (A+B) \n");
        printf("\n");
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", Ans[i][K]);
            }
            printf(" \n");
        }
    }

    //Substraction of Matrix
    void Matrix_Substraction()
    {
        int Row, Column;

        printf("\nSubstraction of Two Matrices (A-B)\n");

        printf("\nInput For Two Matrices\n\nRow=");
        scanf("%d", &Row);
        printf("\Column=");
        scanf("%d", &Column);

        int A[Row][Column], B[Row][Column];
        int Ans[Row][Column];

        printf("\nFor First Matrix :\n\nEnter %d Element Values \n", Row * Column);
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &A[i][K]);
            }
        }
        printf("\nFor Second Matrix :\n\nEnter %d Element Values \n", Row * Column);
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &B[i][K]);
            }
        }
        printf("\n");

        printf("----->Entered Matrices \n \n");
        printf("=>A Matrix\n\n");

        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", A[i][K]);
            }
            printf("\n");
        }
        printf("\n=>B Matrix\n\n");
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", B[i][K]);
            }
            printf("\n");
        }

        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                Ans[i][K] = A[i][K] - B[i][K];
            }
        }

        printf("\n=====>Substraction of Two Matrices (A-B) \n");
        printf("\n");
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", Ans[i][K]);
            }
            printf(" \n");
        }
    }

    //Transpose of Matrix
    void Transpose_Matrix()
    {
        int n;

        printf("Transpose Of Matrix (A^T)\n \n");

        printf("How Much Row-Column You Want? \n \n");
        scanf("%d", &n);

        int A[n][n];
        printf("\nEnter %d Element Value \n", n * n);
        for (int i = 0; i < n; i++)
        {
            for (int K = 0; K < n; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[i][K]);
            }
        }
        printf("\n");
        printf("---->Entered Matrix A\n \n");

        for (int i = 0; i < n; i++)
        {
            for (int K = 0; K < n; K++)
            {
                printf("%4d ", A[i][K]);
            }
            printf(" \n");
        }
        printf(" \n");
        for (int i = 0; i < n; i++)
        {
            for (int K = 0; K < n; K++)
            {
                int Temporary = A[i][K];
                A[i][K] = A[K][i];
                A[K][i] = Temporary;
            }
        }
        printf("=====>Transposed Matrix A^T\n");
        printf("\n");
        for (int i = 0; i < n; i++)
        {
            for (int K = 0; K < n; K++)
            {
                printf("%4d ", A[K][i]);
            }
            printf(" \n");
        }
    }

    //Adjoint of Matrix
    void Adj_A()
    {
        printf("\nAdjoint Of Matrix (Adj.A)\n \n");
        printf("1 - For 2×2 Matrix\nPress 2 - For 3×3 Matrix\n\n");
        int SELECT;
        do
        {
            scanf("%d", &SELECT);
            if (SELECT != 1 && SELECT != 2)
            {
                printf("Enter Valid Input : \n");
            }
        } while (SELECT != 1 && SELECT != 2);

        int A[9];

        if (SELECT == 1)
        {
            printf("\nEnter 4 Element Value \n");
            for (int K = 0; K < 4; K++)
            {
                printf("%d - ", K);
                scanf("%d", &A[K]);
            }
            printf("\n");
            printf("----->Entered Matrix A\n \n");
            printf("+%2d    -%2d", A[0], A[1]);
            printf("\n-%2d    +%2d", A[2], A[3]);

            printf("\n \n");
            printf("---->Co-Factors Of Matrix A");
            printf("\n \n%4d    %4d \n", A[3], -A[2]);
            printf("%4d    %4d", -A[1], A[0]);

            printf("\n \n");
            printf("---->Adjoint Of The Matrix A(Adj.A)\n \n");
            printf("%4d    %4d \n", A[3], -A[1]);
            printf("%4d    %4d \n \n", -A[2], A[0]);
        }
        else
        {
            printf("\nEnter 9 Element Value \n");
            for (int K = 0; K < 9; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[K]);
            }
            printf("\n");
            printf("----->Entered Matrix A\n \n");

            printf("+%2d    -%2d    +%2d\n", A[0], A[1], A[2]);
            printf("-%2d    +%2d    -%2d\n", A[3], A[4], A[5]);
            printf("+%2d    -%2d    +%2d", A[6], A[7], A[8]);

            printf("\n \n");
            printf("---->Co-Factors Of Matrix A\n\n");
            printf("%4d ", ((A[4] * A[8]) - (A[5] * A[7])));
            printf("%4d ", -((A[3] * A[8]) - (A[5] * A[6])));
            printf("%4d \n", ((A[3] * A[7]) - (A[4] * A[6])));
            printf("%4d ", -((A[1] * A[8]) - (A[2] * A[7])));
            printf("%4d ", ((A[0] * A[8]) - (A[2] * A[6])));
            printf("%4d \n", -((A[0] * A[7]) - (A[1] * A[6])));
            printf("%4d ", ((A[1] * A[5]) - (A[2] * A[4])));
            printf("%4d ", -((A[0] * A[5]) - (A[2] * A[3])));
            printf("%4d \n \n", ((A[0] * A[4]) - (A[1] * A[3])));

            printf("\n---->Adjoint Of Matrix A(adj.A)\n \n");
            printf("%4d ", ((A[4] * A[8]) - (A[5] * A[7])));
            printf("%4d ", -((A[1] * A[8]) - (A[2] * A[7])));
            printf("%4d \n", ((A[1] * A[5]) - (A[2] * A[4])));
            printf("%4d ", -((A[3] * A[8]) - (A[5] * A[6])));
            printf("%4d ", ((A[0] * A[8]) - (A[2] * A[6])));
            printf("%4d \n", -((A[0] * A[5]) - (A[2] * A[3])));
            printf("%4d ", ((A[3] * A[7]) - (A[4] * A[6])));
            printf("%4d ", -((A[0] * A[7]) - (A[1] * A[6])));
            printf("%4d ", ((A[0] * A[4]) - (A[1] * A[3])));
        }
        printf("\n");
    }

    //Inverse of Matrix
    void Inverse_Matrix()
    {
        int A[9], P[9], R[9], Determinant;
        int G[9], B[9];
        float K[9];
        int Select;
        printf("Inverse Of The Matrix A(A^-1) \n\n");
        printf("1 - For 2×2 Matrix \n2 - For 3×3 Matrix \n \n ");
        printf("Enter Your Choice : ");
        scanf("%d", &Select);
        while (Select != 1 && Select != 2)
        {
            printf("Enter Valid Input : ");
            scanf("%d", &Select);
        }

        if (Select == 1)
        {
            printf("\nEnter 4 Element Value \n");
            for (int K = 0; K < 4; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[K]);
            }

            //Co-factor Logic
            P[0] = A[3];
            P[1] = -A[2];
            P[2] = -A[1];
            P[3] = A[0];
            //Logic End
            printf("\n");
            printf("----->Entered Matrix A\n");
            printf(" \n");
            printf("%6d    %6d \n", A[0], A[1]);
            printf("%6d    %6d \n \n", A[2], A[3]);
            printf("=========>Determinant Steps :\n");

            printf("\n=+%d*(%d)-%d*(%d) \n", A[0], A[3], A[1], A[2]);

            Determinant = (A[0] *= (A[3])) - (A[1] *= (A[2]));

            Determinant = A[0] - A[1];

            printf("\n=%d - %d", A[0], A[1]);

            printf("\n ");

            if (Determinant == 0)
            {
                printf("\nColumn And Row Are Same.");
            }
            printf("\n----->Answer |D|=%d\n\n", Determinant);
            if (Determinant != 0)
            {
                printf("---->Co-Factors Of The Matrix A \n ");
                printf("\n%6d   %6d \n", P[0], P[1]);
                printf("%6d   %6d \n \n", P[2], P[3]);

                B[0] = P[0];
                B[1] = P[2];
                B[2] = P[1];
                B[3] = P[3];
                printf("---->Adjoint Of The Matrix A(Adj.A)");
                printf("\n \n");
                printf("%6d    %6d \n", B[0], B[1]);
                printf("%6d    %6d \n \n", B[2], B[3]);

                for (int A = 0; A < 4; A++)
                {
                    K[A] = (float)B[A] / (float)Determinant;
                }

                printf("----->Inverse Of The Matrix A(A^-1)\n \n \t A^-1=adj.A/|D|\n");

                printf("\n(1)\n%4d/%2d  %4d/%2d \n", B[0], Determinant, B[1], Determinant);
                printf("%4d/%2d  %4d/%2d  \n", B[2], Determinant, B[3], Determinant);
            }
            else
            {
                printf("This Matrix Has No Inverse.This Matrix Determinant Is Equal To Zero.So This Matrix Has No Inverse. \n \n");
            }
        }
        else
        {
            printf("\nEnter 9 Element Value \n");
            for (int K = 0; K < 9; K++)
            {
                printf("%d - ", K + 1);
                scanf("%d", &A[K]);
            }

            //Co-factor Logic
            G[0] = ((A[4] * A[8]) - (A[5] * A[7]));
            G[1] = -((A[3] * A[8]) - (A[5] * A[6]));
            G[2] = ((A[3] * A[7]) - (A[4] * A[6]));
            G[3] = -((A[1] * A[8]) - (A[2] * A[7]));
            G[4] = ((A[0] * A[8]) - (A[2] * A[6]));
            G[5] = -((A[0] * A[7]) - (A[1] * A[6]));
            G[6] = ((A[1] * A[5]) - (A[2] * A[4]));
            G[7] = -((A[0] * A[5]) - (A[2] * A[3]));
            G[8] = ((A[0] * A[4]) - (A[1] * A[3]));
            //Logic End
            printf("\n");
            printf("----->Entered Matrix A\n");
            printf("\n%6d     %6d     %6d \n", A[0], A[1], A[2]);
            printf("%6d     %6d     %6d  \n", A[3], A[4], A[5]);
            printf("%6d     %6d     %6d\n\n", A[6], A[7], A[8]);

            printf("=========>Determinant Steps :\n");

            printf("\n=+%d*(%d * %d)-(%d * %d) \n -%d*(%d * %d)-(%d * %d) \n +%d*(%d * %d)-(%d * %d)\n \n", A[0], A[4], A[8], A[5], A[7], A[1], A[3], A[8], A[5], A[6], A[2], A[3], A[7], A[4], A[6]);

            Determinant = A[0] * (P[0] = (A[4] * A[8])) - (P[1] = (A[5] * A[7])) - A[1] * (P[2] = (A[3] * A[8])) - (P[3] = (A[5] * A[6])) + A[2] * (P[4] = (A[3] * A[7])) - (P[5] = (A[4] * A[6]));

            printf("=%d*(%d - %d) \n -%d*(%d - %d) \n +%d*(%d - %d)\n \n", A[0], P[0], P[1], A[1], P[2], P[3], A[2], P[4], P[5]);
            Determinant = A[0] * (R[0] = (P[0] - P[1])) - A[1] * (R[1] = (P[2] - P[3])) + A[2] * (R[2] = (P[4] - P[5]));
            printf("=%d*(%d)-%d(%d)+%d(%d)", A[0], R[0], A[1], R[1], A[2], R[2]);
            Determinant = (A[0] *= R[0]) - (A[1] *= R[1]) + (A[2] *= R[2]);

            Determinant = A[0] - A[1] + A[2];

            printf("\n=%d -%d +%d", A[0], A[1], A[2]);

            printf("\n ");

            if (Determinant == 0)
            {
                printf("\n2 Or 3 Column Or Row Are Same.");
            }
            printf("\n----->Answer |D|=%d\n\n", Determinant);

            if (Determinant != 0)
            {
                printf("---->Co-Factors Of The Matrix A \n ");
                printf("\n%6d   %6d   %6d \n", G[0], G[1], G[2]);
                printf("%6d   %6d   %6d  \n", G[3], G[4], G[5]);
                printf("%6d   %6d   %6d\n\n", G[6], G[7], G[8]);

                B[0] = G[0];
                B[1] = G[3];
                B[2] = G[6];
                B[3] = G[1];
                B[4] = G[4];
                B[5] = G[7];
                B[6] = G[2];
                B[7] = G[5];
                B[8] = G[8];

                printf("----->Adjoint Of The Matrix A(Adj.A)\n \n");
                printf("|%6d  %6d  %6d|\n", B[0], B[1], B[2]);
                printf("|%6d  %6d  %6d|\n", B[3], B[4], B[5]);
                printf("|%6d  %6d  %6d|\n \n", B[6], B[7], B[8]);
                printf(" \n");
                for (int A = 0; A <= 8; A++)
                {
                    K[A] = (float)B[A] / (float)Determinant;
                }

                printf("=====>Inverse Of The Matrix A(A^-1)\n \n\t   A^-1=adj.A/|D| \n ");
                printf("\n%4d/%2d  %4d/%2d  %4d/%2d\n", B[0], Determinant, B[1], Determinant, B[2], Determinant);
                printf("%4d/%2d  %4d/%2d  %4d/%2d\n", B[3], Determinant, B[4], Determinant, B[5], Determinant);
                printf("%4d/%2d  %4d/%2d  %4d/%2d\n", B[6], Determinant, B[7], Determinant, B[8], Determinant);
            }
            else
            {
                printf("This Matrix Has No Inverse. Becuase This Matrix Determinant Is Equal To Zero.\n \n");
            }
        }
    }

    //Scalar_Multiplication()
    void Scalar_Multiplication()
    {
        int Row, Column;
        int n;

        printf("\n=====>Scalar Multiplication(nA) \n ");
        printf("\n=>Input For Matrix\nRow=");
        scanf("%d", &Row);
        printf("\Column=");
        scanf("%d", &Column);
        printf("\n=>Enter Scalar nA\nn=");
        scanf("%d", &n);
        int A[Row][Column];
        int Ans[Row][Column];

        printf("\nEnter %d Element Values \n", Row * Column);
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("A[%d][%d] - ", i, K);
                scanf("%d", &A[i][K]);
            }
        }

        printf("\n");

        printf("Entered Matrix \n \n");
        printf("=>A Matrix\n");

        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", A[i][K]);
            }
            printf("\n");
        }

        for (int i = 0; i < Row; i++)
        {
            for (int G = 0; G < Column; G++)
            {
                Ans[i][G] = n * (A[i][G]);
            }
        }
        printf("\n=====>Scaler Multiplication Of The Matrix %dA \n", n);
        printf("\n");
        for (int i = 0; i < Row; i++)
        {
            for (int K = 0; K < Column; K++)
            {
                printf("%4d ", Ans[i][K]);
            }
            printf(" \n");
        }
    }

/*Matrix Calculator Method Access Function 5088 to 5141*/

    void Matrix_Calculator_func()
    {
        do
        {
            printf("\n---------Matrix Calculator---------\n         _________________\n\nNOTE:Enter Only Integer Numbers.\n\n");

            printf("\n1-Determinant\n2-Cramer's Rule Equation Solve \n3-Two Matrix Multiplication(A*B)\n4-Two Matrix Addition(A+B)\n5-Two Matrix Substraction(A-B)\n6-Transpose The Matrix(A^T)\n7-Adjoint Of The Matrix(Adj.A)\n8-Inverse Of The Matrix(A^-1)\n9-Scalar Multiplication(nA)\n");

            printf("\n----->Enter Your Choice : ");
            scanf("%d", &Select);

            if (Select != 1 && Select != 2 && Select != 10)
            {
                printf("NOTE: Don't Forgot To Put Matrix Sign([ ]) Around Matrices.\n");
            }
            printf("\n");

            switch (Select)
            {
            case 1:
                Determinant();
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
                printf("Your Input Is Not Valid.\nEnter Valid Input :\n");
            }
        } while (Select <= 9);
    }
};

/*---------------------------------------------------------------*/
//main() function
int main()
{
    int Choice;
    CoOrdinate_and_Geometry Obj; //C Code with C++ Code

    cout << "\t \t    Scientific Calculator \n____________________________________________________________\n \t \t DEVELOPER : Ghanshyam Vaja\n____________________________________________________________\n ";
    do
    {
        cout << " \n \n \t \t          OPTIONS \n \t \t         ---------\n1 - Sequence And Progression\n2 - Digital Storage\n3 - Length \n4 - Co-Ordinate and Geometry \n5 - Statistics \n6 - BODY MASS INDEX Calculator \n7 - Exit";

        cout << " \n \n----->Enter Your Choice:";
        cin >> Choice;

        while (Choice < 1 || Choice > 7)
        {
            cout << "Please Enter Valid Input:";
            cin >> Choice;
        }
        cout << " \n";
        cout << "\n____________________________________________________________\n";
        switch (Choice)
        {
        case 1:
            Sequence_And_Progression_func();
            break;

        case 2:
            Digital_Storage_func();
            break;

        case 3:
            Length_func();
            break;

        case 4:
            Obj.CoOrdinate_and_Geometry_func();
            break;

        case 5:
            Statistics_func();
            break;

        case 6:
            BMI_func();
            break;

        case 7:
            cout << "Thank You For Using My Software☺️☺️ \n";
            cout << "____________________________________________________________\n";
            exit(0);
        }
        cout << "____________________________________________________________\n";
    } while (Choice != 7);
}