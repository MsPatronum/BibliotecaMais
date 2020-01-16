from django.shortcuts import render, redirect
from django.views import generic
from django.urls import reverse_lazy
from BiblioLivros.forms import LivroFormulario
from BiblioLivros.models import Livros

class LivroListarView(generic.ListView):
	model = Livros
	template_name = 'mostrar.html'

	def get_queryset(self):
		listalivros = self.model.objects.all()
		return listalivros

class LivroCriarView(generic.CreateView):
	model = Livros
	form_class = LivroFormulario
	template_name = 'criar.html'

	def formulario_valido(self, form):
		if form.is_valid():
			print(form)
			form.save(self.request)
			return redirect('listar_livro_info')
		print(form)

class LivroEditarView(generic.UpdateView):
	model = Livros
	form_class = LivroFormulario
	template_name = 'livro-form.html'
	success_url = reverse_lazy('listar_livro_info')

	#pegar o objeto
	def get_objeto(self, *args, **kwargs):
		livro_info = get_object_or_404(Livros, pk=self.kwargs['id'])
		return livro_info

	def formulario_valido(self, form):
		form.save(self.request)
		return redirect('listar_livro_info')

#def excluir(request, id):
#	livro = LivrosFormulario.objects.get(id=id)
#	livro.delete()
#	return redirect('/show')