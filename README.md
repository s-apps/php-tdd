# TDD - Test Driven Development - PHP
# O framework PHPUnit
PHPUnit fornece funcionalidades específicas para suportar esses diferentes tipos de testes, incluindo assertivas específicas e configurações flexíveis. Isso permite que desenvolvedores escrevam testes abrangentes para diferentes aspectos de seus aplicativos.
A capacidade de PHPUnit de suportar vários tipos de testes contribui para a criação de uma suíte de testes abrangente que cobre diferentes camadas e aspectos do desenvolvimento de software.
## Tipos de testes suportados:

 1. **Testes unitários**: São testes que visam verificar o comportamento de unidades individuais de código, como métodos ou funções isoladas.
 2. **Testes de integração**: Verificam como diferentes partes do sistema funcionam em conjunto. Isso pode incluir a integração de classes, módulos ou até mesmo sistemas externos.
 3. **Testes funcionais**: Testam o sistema como um todo, simulando a interação do usuário com o aplicativo. Os testes funcionais podem incluir simulações de cliques, preenchimento de formulários e navegação no aplicativo.
 4. **Testes de aceitação**: São testes que garantem que o sistema atende aos requisitos do usuário. Eles podem envolver a execução de casos de uso completos ou cenários de usuário.

## Instalação via Composer
Tem a vantagem onde os desenvolvedores saberão qual a versão do PHPUnit está sendo utilizada. Para esta instalação está sendo usado a versão 8.2 do PHP e Sistema Operacional Linux.
```
composer require --dev phpunit/phpunit ^10
```
# Testes unitários
Começando pelas classes que são mais fáceis de isolar, que não possuem dependências de outras classes. Como exemplo vamos testar a classe Email: [app/Email/Email.php](app/Email/Email.php). Uma convenção do PHPUnit é usar a palavra **test** no começo do nome do método ou uma ***annotation*** para cada método. 
Mais sobre **annotations**: [https://docs.phpunit.de/en/10.5/annotations.html#annotations](https://docs.phpunit.de/en/10.5/annotations.html#annotations)
```
public function testIsInstanceOfEmail(): void
```
```
/**
 1. @test
*/
public function isInstanceOfEmail(): void
```
## Criando a classe que irá conter os testes
Em [tests/Email/EmailTest.php](tests/Email/EmailTest.php) criamos o arquivo EmailTest.php com o mesmo nome da classe e estendemos a classe TestCase do PHPUnit:
```
class EmailTest extends TestCase
{
}
```
Quando olhamos para a classe Email visualizamos dois cenários (o que eu quero testar?): 
 1. Validar o tipo da instância, saber se a instância é da classe Email mesmo 
 ```public static function returnInstance(string  $email): self```
 2. Verificar se o email é válido
 ```private function isValidEmail(string  $email): void```

## Assertions
**Assertion** é uma instrução ou chamada de método que verifica se uma determinada condição é verdadeira durante a execução de um teste. As **assertions** são usadas para verificar se os resultados reais do seu código correspondem aos resultados esperados definidos nos seus casos de teste. 
Mais sobre **assertions** [https://docs.phpunit.de/en/10.5/assertions.html#assertions](https://docs.phpunit.de/en/10.5/assertions.html#assertions)

Na classe EmailTest foram utilizadas duas assertions:

 1. **assertInstanceOf**: verifica se é uma instância da classe Email.
 2. **expectException**: verifica se uma exceção é lançada pelo código em teste.

## Executando os testes
**O comando abaixo executará todos os testes existentes dentro do diretório tests**:
```./vendor/bin/phpunit tests```

Resultado apresentando 4 testes e 4 assertions:
```
PHPUnit 10.5.3 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7

....                                                                4 / 4 (100%)

Time: 00:00.030, Memory: 8.00 MB

OK (4 tests, 4 assertions)
```
**O comando abaixo executará os testes individualmente, no caso só para a classe Email**:
```./vendor/bin/phpunit tests/Email/EmailTest.php```

Resultado apresentando 2 testes e 2 assertions:
```
PHPUnit 10.5.3 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7

..                                                                  2 / 2 (100%)

Time: 00:00.017, Memory: 8.00 MB

OK (2 tests, 2 assertions)
```
