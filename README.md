# Solid PHP

Este repositório contém anotações de estudo sobre SOLID para PHP.

## Instalação

- Realizar o clone do projeto ou apenas o download:

```git
git clone https://github.com/karenyov/solidPHP.git
```

- Instalar o composer:

```shell
composer install
```

## Rodandos os Tests

- No terminal na raíz do projeto:

```shell
vendor/bin/phpunit
```


# Anotações

## Código com problemas

Existem alguns "sintomas" ou características que são visíveis a códigos com problemas.
Algumas delas são:

- 1. Ausência de testes
- 2. Classes muito grandes
- 3. Muita complexidade (complexidade ciclomática)
- 4. Falta de padrão no código
- 5. Não ser SOLIDo

## SOLID 

- S: Single Responsability - Uma classe deve ter uma, e somente uma, responsabilidade.
> a classe deve ter o mínimo de responsabilidade possível

- O: Open/close principle - Você deve ser capaz de estender um comportamento de uma classe, mas nunca modificá-la.
> nunca deve abrir uma classe e adicionar um novo recurso, você deverá estendê-la (Expansão e Fechado para alteração)

- L: Liskov Substituition - As classes derivadas devem ser substituíveis por suas classes base, sem que resultem em erros.
> subtipos e tipo(pais e filhos) devem se complementar

- I: Interface Segregation - Muitas interfaces específicas são melhores do que uma interface única.
> sempre trabalhar com interface

- D: Dependency Inversion - Dependa de uma abstração e não de uma implementação.
