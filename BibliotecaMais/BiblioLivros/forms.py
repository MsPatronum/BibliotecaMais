from django import forms
from BiblioLivros.models import Livros, Autores, AutorLivro
from django.forms.models import inlineformset_factory
from django_select2.forms import Select2Widget

# FORMULARIO PARA A TABELA LIVROS
class LivroFormulario(forms.ModelForm):
	class Meta:
		model = Livros
		fields = ['titulo_livro','subtitulo_livro','avaliacao_livro','isbn_livro','publicacao_livro','categoria_cod_categoria','editora_cod_editora',]

# FORMULARIO PARA A TABELA AUTORES
class AutorFormulario(forms.ModelForm):
	class Meta:
		model = Autores
		exclude = ()

# FORMULARIO QUE LIDA COM AS TABELAS AUTORES, LIVROS E AUTORLIVRO, ONDE AUTORLIVRO É UMA ENTIDADE FRACA E TEM FOREIGN KEYS DAS OUTRAS DUAS TABELAS
class AutorLivro_LivroFormulario(forms.ModelForm):
	class Meta:
		model = AutorLivro
		exclude = ()
		widgets = {
			'autor_cod_autor': Select2Widget,
		}
# FORMSET QUE LIDA COM A LINKAGEM DAS TABELAS, VENDO A FOREIGN KEY DA TABELA AUTORLIVRO E PROCURANDO A CORRESPONDENTE NA TABELA LIVROS
AutorLivroFormSet = inlineformset_factory(Livros, AutorLivro, form = AutorLivro_LivroFormulario, extra = 1)
