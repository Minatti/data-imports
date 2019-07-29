Projeto para automatizar o trabalho manual de importação, os dados serão persistidos e lidos a partir de um arquivo, que contêm, o tipo de extensão (.ret). Neste exemplo prático estaremos simulando um layout de arquivo do banco, todo o conteudo do arquivo será importadado para o banco de dados MYSQLI, onde será percorrido todas as linhas do arquivo. Com este número x usaremos uma função para localizar a posição inicial e a posição fim para persistir os dados por pedaços em cada coluna.


Exemplo;

CAMPOS = A, B, C, D, E, F; 

A = 1 STRING 
B = 2 STRING 
C = 14 STRING
D = 3 STRING
E = 6 STRING
F = 4 STRING

UMA LINHA INTEIRA É O TOTAL DE STRING, 
CADA TAMANHO DE STRING PERSISTIRÁ NA TABELA.