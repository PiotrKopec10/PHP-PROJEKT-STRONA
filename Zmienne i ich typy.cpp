#include <iostream>
#include <string>
int main()
{
    // Typy zmiennych

    int a,b,c;




    short int mniejszy_intiger;         // Sa to 2 bajty a nie 4 jak w przypadku zwyklego int, pomaga zmiejszyc wielkosc



    float zm_zmiennoprzecinkowa = 4.5;  // zmienna zmienno przecinkowa, Rozni sie od inta tym ¿e mozemy wypisac liczby po przecinku!!



    std::cout<< zm_zmiennoprzecinkowa << "\n";
    std::cout<< 5/2 <<"\n";             //Jak tak podzielimy to wyjdzie nam liczba calkowita, jezeli chcemy podzielic tak aby bylo dokladne dzielenie to musimy to zrobic z kropka czyli 5.0
    std::cout<< 5.0/2 <<"\n";           // Dokladnie w taki sposob



    //NASTEPNY TYP ZMIENNEJ

    double zm_zmiennoprzecinkowa2=6.51;         // Double odpowiada za dokladne ukazywanie zmiennych z liczbami po przecinku dokladnie do 10 liczb po przecinku.

    std::cout << zm_zmiennoprzecinkowa2 / 2  << "\n";


    // NASTEPNY

    char znak ='$';               //Pzechowywuje nam to znak jaki chcemy tylko i uzywamy do tego ''. Jezeli chcemy sie pobawic znakami i je polaczyc musimy zalaczyc biblioteke <string>
    std::cout << znak <<"\n";

    // NASTEPNY

    std::string tekst = "to jest przykladowy tekst :)" ;            // String pozwala przechowywac wiele znakow na raz np.tekst            // Pamietac ze do stringa uzywac std!!
    std::cout << tekst << "\n";
    std::string imie = "Piotr";
    std::string nazwisko = "Kopec";
    std::cout << imie << " " <<nazwisko <<"\n";

    std::cout<<"  "<<"\n";

    std::string imie_oraz_nazwisko = imie +" " + nazwisko ;           // Mozemy polaczyc stringi w jedno i dodac spacje jako " " plus pamietac o znaku plus po spacji " "

    std::cout << imie_oraz_nazwisko <<"\n";

    std::cout<<"  "<<"\n";

    std::string imie_oraz_nazwisko12 = "Imie: " + imie + " "  + "Nazwisko: " + nazwisko;

    std::cout << imie_oraz_nazwisko12 <<"\n";

    // Mozemy przypisac stala np.

    const std::string NAZWA_GRY = "C++ THE GAME " ;

    std::cout <<NAZWA_GRY<<"\n";



    // NASTEPNA ZMIENNA

    bool wartosc_prawdy_lub_falszu;             // Posiada tylko 2 wartosci prawdy lub falszu czyli 0/1 ale mozemy przypisac im jakies wartosci typu true= 40

    wartosc_prawdy_lub_falszu = false;          // Mozemy przypisac wartosc true lub false

    std::cout<< wartosc_prawdy_lub_falszu <<"\n";


    //ISTNIEJE COS TAKIEGO JAK

    unsigned short int mniejszy_intiger2 = 5;           // tylko wartosci dodatnie

    std::cout << mniejszy_intiger2<<"\n";

    // // // // // // // // // // // // // // //

    return 0;
}
