ALGORITMO: PINTAR UMA TABELA COM LINHA SIM LINHA NÃO

X = 0
linha atual = 1
linhas = 10

ENQUANTO linha atual < linhas
    x = 1 - x
    SE x = 0
        PINTAR LINHA DE PRETO
    SE X = 1
        PINTAR LINHA DE CINZA
    linha atual = linha atual + 1