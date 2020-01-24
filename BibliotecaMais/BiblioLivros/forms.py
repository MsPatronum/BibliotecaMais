from django import forms
from BiblioLivros.models import Livros, Autores, AutorLivro
from django.forms.models import inlineformset_factory

class LivroFormulario(forms.ModelForm):

	class Meta:
		model = Livros
		fields = ['titulo_livro','subtitulo_livro','avaliacao_livro','isbn_livro','publicacao_livro','categoria_cod_categoria','editora_cod_editora',]

class AutorFormulario(forms.ModelForm):
	class Meta:
		model = Autores
		fields = ['nome_autor', 'sexo_autor']

class AutorLivro_LivroFormulario(forms.ModelForm):
	class Meta:
		model = AutorLivro
		exclude = ()

AutorLivroFormSet = inlineformset_factory(Livros, AutorLivro, form = AutorLivro_LivroFormulario, extra = 1)
