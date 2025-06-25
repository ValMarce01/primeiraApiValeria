class divisaodedoisnumeros(Exception):

    pass
    try:
        valor1 = int(input("Digite o primeiro número: "))
        valor2 = int(input("Digite o segundo número: "))
        divisao = valor1/valor2

    except ZeroDivisionError:
        print("Erro: Não é possível dividir por zero. Tente novamente.")
        valor1 = int(input("Digite o primeiro número: "))
        valor2 = int(input("Digite o segundo número: "))
    except ValueError:
        print("Erro: Não é possível dividir por zero. Tente novamente.")
        valor1 = int(input("Digite o primeiro número: "))
        valor2 = int(input("Digite o segundo número: "))
    finally:
        print(valor1/valor2)
        print("Operacão finalizada com sucesso.")

