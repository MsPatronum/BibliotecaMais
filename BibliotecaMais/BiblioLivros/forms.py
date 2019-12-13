from django import forms
from BiblioLivros.models import Livros, Editora

class EditoraModelChoice(forms.ModelChoiceField):
    def label_from_instance(self, obj):
        return "%s" % (obj.nome_editora)

class LivrosFormulario(forms.ModelForm):
	nome_editora = EditoraModelChoice(queryset=Editora.objects.all())
	class Meta:
		model = Livros
		fields = ['titulo_livro','subtitulo_livro','sinopse_livro','avaliacao_livro','isbn_livro','publicacao_livro','categoria_cod_categoria','editora_cod_editora']


