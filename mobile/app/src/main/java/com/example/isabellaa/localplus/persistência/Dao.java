package com.example.isabellaa.localplus.persistência;

import com.example.isabellaa.localplus.entidade.Carro;
import com.example.isabellaa.localplus.entidade.Cliente;

import java.util.LinkedList;
import java.util.List;

public class Dao {
    private static List lista;
    private static List listacliente;
    private static int indice;
    private static int indicecliente;

    private Dao(){}

    public static void salvar(Carro c){
        if(lista.contains(c))
            lista.set(lista.indexOf(c),c);
        else{
            c.setId(indice);
            lista.add(c);
            indice++;
        }
    }

    public static void salvar(Cliente c){
        if(listacliente.contains(c))
            listacliente.set(listacliente.indexOf(c),c);
        else{
            c.setId(indicecliente);
            listacliente.add(c);
            indicecliente++;
        }
    }

    public static List getLista(){

        if(lista==null){
            lista= new LinkedList();
            indice = 0;
        }
        return lista;

    }
    public static List getListacliente(){

        if(listacliente==null){
            listacliente= new LinkedList();
            indicecliente = 0;
        }
        return listacliente;
    }
}
