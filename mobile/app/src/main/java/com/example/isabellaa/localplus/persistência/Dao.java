package com.example.isabellaa.localplus.persistência;

import com.example.isabellaa.localplus.entidade.Carro;

import java.util.LinkedList;
import java.util.List;

public class Dao {
    private static List lista;
    private static int indice;


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

    public static List getLista(){

        if(lista==null){
            lista= new LinkedList();
            indice = 0;
        }
        return lista;

    }

}
