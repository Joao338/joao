// See https://aka.ms/new-console-template for more information


class program{

    //public static void Main(String[] args){
static void Main(){

 aluno obj1 = new aluno();
 obj1.matricula = "a";
 obj1.nome = "nome 1";
 obj1.nota1 = 6;
 obj1.nota2 = 9;

 aluno obj2 = new aluno();
 obj2.matricula = "b";
 obj2.nome = "nome 2";
 obj2.nota1 = 6;
 obj2.nota2 = 9;

 
 aluno obj3 = new aluno();
 aluno obj4 = new aluno();
 aluno obj5 = new aluno();


}


    static void Executar(){

    Console.WriteLine("digie o nome do aluno");
String nome = Console.ReadLine();

Console.WriteLine("digite a nota1");
double nota1 = Convert.ToDouble(Console.ReadLine());

Console.WriteLine("digite a nota2");
double nota2 = Convert.ToDouble(Console.ReadLine());

Console.WriteLine($"* nome *  {nome}" );
Console.WriteLine($"*  primeora nota * {nota1}");
Console.WriteLine($"* segunda nota * {nota2}");

Console.WriteLine($"somar: { calculadora.somar(nota1, nota2)}");
Console.WriteLine($"subtrair: { calculadora.subtrair(nota1, nota2)}");
Console.WriteLine($"multplicar: { calculadora.multiplicar(nota1, nota2)}");
Console.WriteLine($"dividir: { calculadora.dividir(nota1, nota2)}");

}
}





