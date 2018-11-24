package com.example.isabellaa.localplus.entidade;

import java.io.Serializable;
import java.util.Date;

public class Funcionario implements Serializable{
    private Integer id;
    private String nome;
    private String rg;
    private String cpf;
    private String endereco;
    private String dataDeAdmissao;
    private String datadeDemissao;

    public Funcionario (){id=0;}

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

    public String getDataDeAdmissao() {
        return dataDeAdmissao;
    }

    public void setDataDeAdmissao(String dataDeAdmissao) {
        this.dataDeAdmissao = dataDeAdmissao;
    }

    public String getDatadeDemissao() {
        return datadeDemissao;
    }

    public void setDatadeDemissao(String datadeDemissao) {
        this.datadeDemissao = datadeDemissao;
    }

    @Override
    public String toString() {
        return "Nome:"+getNome()+"\nRG:"+getRg()+"\nCPF:"+getCpf()+
                "\nEndereço:"+getEndereco() + "\nData de Admissão:"+getDataDeAdmissao()+"\nData de Demissão:"+getDatadeDemissao();
    }
}
