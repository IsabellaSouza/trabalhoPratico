package com.example.isabellaa.localplus.entidade;

import java.io.Serializable;

public class Cliente implements Serializable {
    private Integer id;
    private String nome;
    private String rg;
    private String cpf;
    private String endereco;
    private Integer cnh;
    private Integer numerodependentes;
    public Cliente(){
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

    public String getRg() {
        return rg;
    }

    public void setRg(String rg) {
        this.rg = rg;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public Integer getCnh() {
        return cnh;
    }

    public void setCnh(Integer cnh) {
        this.cnh = cnh;
    }

    public Integer getNumerodependentes() {
        return numerodependentes;
    }

    public void setNumerodependentes(Integer numerodependentes) {
        this.numerodependentes = numerodependentes;
    }

    @Override
    public boolean equals(Object obj) {
        Cliente c = (Cliente) obj;
        if(c.getId().equals(this.getId()))
            return true;
        return false;
    }
    public String toString(){return "Nome:" +getNome()+"\nRG:"+getRg()+"\nCPF:"+getCpf()+"\nEndereĂ§o:"+getEndereco()+
            "\nCNH:"+getCnh() + "\nNumero de Dependentes:"+getNumerodependentes();
    }


}
