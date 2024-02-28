// See https://aka.ms/new-console-template for more information


//string mensagem = "Olá mundo c#!";
//Console.WriteLine("digite a mensagem");
//string mensagem = Console.ReadLine();
//Console.WriteLine("mensagem");

// Console.WriteLine("digite o valor 'a' :");
// int a = Convert.ToInt32(Console.ReadLine());
// Console.WriteLine("digite o valor 'b' :");
// int b = Convert.ToInt32(Console.ReadLine());
// Console.WriteLine($"o resultado é: {a+b}");

// if((a + b) >= 6){
//     Console.WriteLine("aluno aprovado!");
// }
// else{
//     Console.WriteLine("aluno reprovado!");
// }

bool executar = true;
int contador = 0;
string[] letras = new string[]{"a", "b", "c", "d", "e"};

while(executar && contador < letras.Length){

    var letra = letras[contador];
    Console.WriteLine("letra:" + letra);
    contador++;
}










