class Pessoa:
    def __init__(self, nome, idade):
        self.nome = nome
        self.idade = idade

    def exibir_dados(self):
        print(f"Nome: {self.nome}, idade: {self.idade}")

class Hospede(Pessoa):
    def __init__(nome, idade, numero_quarto):
        super().__init__(nome, idade)
        self.numero_quarto = numero_quarto

    def exibir_hospedagem(self):
        print()

class Funcionario(Pessoa):
    def __init__(self, nome, idade, salario):
        super().__init__(nome, idade)
        self.salario = salario

    def exibir_salario(self):
        print()

pessoa = Pessoa(nome="Maria Abacate", idade=30)
pessoa.exibir_dados()

hospede = Hospede(nome="Maria das Puras \n", idade=32, numero_quarto=100)
hospede.exibir_hospedagem()

funcionario = Funcionario(nome="Maria Fumaça \n", idade=69, salario=1000)
funcionario.exibir_salario()

