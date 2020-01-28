from django.db import models


# CLASSE PARA A CRIAÇÃO DA TABELA DE LIVROS
class Livros(models.Model):
	titulo_livro = models.CharField(
		max_length = 45
		)
	subtitulo_livro = models.CharField(
		max_length = 45,
		null = True,
		blank = True
		)
	#capa_livro = models.CharField(
	#	max_length = 250,
	#	null = True
	#	)
	#sinopse_livro = models.TextField(
	#	max_length = 1000,
	#	default = "Teste"
	#	)
	avaliacao_livro = models.DecimalField(
		max_digits = 3,
		decimal_places = 2,
		blank = True
		)
	isbn_livro = models.CharField(
		max_length = 13
	) 
	publicacao_livro = models.DecimalField(
		max_digits = 4,
		decimal_places = 0
		)
	editora_cod_editora = models.ForeignKey(
		'Editora',
		on_delete = models.CASCADE
		)
	categoria_cod_categoria = models.ForeignKey(
		'Categoria',
		on_delete = models.CASCADE
		)

	class Meta:
		db_table = 'Livros'




# CLASSE PARA A CRIAÇÃO DA TABELA DE EDITORAS    
class Editora(models.Model):
	nome_editora = models.CharField(
		max_length = 45
		)

	def __str__(self):
		return '%s' % self.nome_editora


	class Meta:
		db_table = 'editora'

# CLASSE PARA A CRIAÇÃO DA TABELA DE CATEGORIAS
class Categoria(models.Model):
	nome_categoria = models.CharField(
		max_length = 45
		)
	cod_categoria = models.CharField(
		max_length = 10
		)

	def __str__(self):
		return '%s' % self.nome_categoria

	class Meta:
		db_table = 'categoria'

objetos = models.Manager()

# CLASSE PARA CRIAÇÃO DE AUTORES
class Autores(models.Model):
	nome_autor = models.CharField(
		max_length = 45
		)
	sobrenome_autor = models.CharField(
		max_length = 45
		)
	datanasc_autor = models.DateField(
		auto_now = False,
		auto_now_add = False
		)
	sexo_autor = models.CharField(
		max_length = 1,
		choices = [('F', 'Feminino'), ('M', 'Masculino')]
		)

	def __str__(self):
		return "{0} {1}".format(self.nome_autor, self.sobrenome_autor)

	class Meta:
		db_table = 'autores'
		

# CLASSE PARA CONEXÃO ENTRE AUTOR E LIVRO

class AutorLivro(models.Model):
	autor_cod_autor = models.ForeignKey(
		'Autores',
		on_delete = models.CASCADE
		)
	livro_cod_livro = models.ForeignKey(
		'Livros',
		on_delete = models.CASCADE
		)
	ordinal_autorlivro = models.IntegerField(
		)
	autor_funcao = models.CharField(
		max_length = 20
		)

	class Meta:
		db_table = 'autorlivro'