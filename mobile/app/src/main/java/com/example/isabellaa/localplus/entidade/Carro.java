package com.example.isabellaa.localplus.entidade;

import java.io.Serializable;

public class Carro implements Serializable {
    private Integer id;
    private String placa;
    private String nome;
    private String marca;
    private String modelo;
    private float valorDoSeguro;
    private float valorDaLocacao;
    private String cor;
    private boolean ativo;
    public Carro(){
        id=0;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getPlaca() {
        return placa;
    }

    public void setPlaca(String placa) {
        this.placa = placa;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public float getValorDoSeguro() {
        return valorDoSeguro;
    }

    public void setValorDoSeguro(float valorDoSeguro) {
        this.valorDoSeguro = valorDoSeguro;
    }

    public float getValorDaLocacao() {
        return valorDaLocacao;
    }

    public void setValorDaLocacao(float valorDaLocacao) {
        this.valorDaLocacao = valorDaLocacao;
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public boolean isAtivo() {
        return ativo;
    }

    public void setAtivo(boolean ativo) {
        this.ativo = ativo;
    }

    @Override
    public boolean equals(Object obj) {
        Carro c = (Carro) obj;
        if(c.getId().equals(this.getId()))
        return true;
        return false;
    }
    public String toString(){return "Placa:" +getPlaca()+"\nNome:"+getNome()+"\nMarca:"+getMarca()+"\nModelo:"+getModelo()+
    "\nValor do Seguro:"+getValorDoSeguro() + "\nValor da Locação:"+getValorDaLocacao()+"\nCor:"+getCor();}
}
