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
	capa_livro = models.CharField(
		max_length = 250
		)
	sinopse_livro = models.TextField(
		max_length = 1000
		)
	avaliacao_livro = models.DecimalField(
		max_digits = 2,
		decimal_places = 2
		)
	isbn_livro = models.CharField(
		max_length = 13
	) 
	publicacao_livro = models.DateField(
		auto_now = False,
		auto_now_add = False
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
	class Meta:
		db_table = 'categoria'

objetos = models.Manager()