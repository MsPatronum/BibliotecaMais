from django.shortcuts import render, redirect
from BiblioLivros.forms import LivrosFormulario
from BiblioLivros.models import Livros, Categoria

def livro(request):
	if request.method == 'POST':
		form = LivrosFormulario(request.POST or None)
		cat = Categoria.objects.only('nome_categoria')
		print(cat)
		print(form.errors)
		if form.is_valid():
			print("form é válido")
			try:
				form.save()
				print("form salvo")
				return redirect('/mostrar')
			except:
				print("form não salvo")
				pass
		else:
			print("form não é válido")
	else:
		form = LivrosFormulario()
	return render(request, 'index.html', {'form':form})


def mostrar(request):
	livros = Livros.objects.all()
	return render(request,'mostrar.html',{'livros':livros})

def editar(request,id):
	livro = Livros.objects.get(id=id)
	return render(request,'editar.html',{'livro':livro})

def atualizar(request,id):
	livro = Livros.objects.get(id=id)
	form = LivrosFormulario(request.POST, instance = livro)
	if form.is_valid():
		return redirect('/mostrar')
	return render(request, 'editar.html', {'livro':livro})

def excluir(request, id):
	livro = LivrosFormulario.objects.get(id=id)
	livro.delete()
	return redirect('/show')