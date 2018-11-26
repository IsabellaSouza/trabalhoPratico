package com.example.isabellaa.localplus.entidade;

import java.io.Serializable;
import java.util.Date;

public class Locacao implements Serializable {
    private Integer id;
    private String datalocacao;
    private String datadevolucao;
    private float quilometragem;
    private String cpfpessoa;
    private String placaveiculo;
    private boolean ativolocacao;

    public Locacao (){id=0;}

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getdatalocacao() {
        return String.valueOf(datalocacao);
    }

    public void setdatalocacao(String datalocacao) {
        this.datalocacao = datalocacao;
    }

    public String getdatadevolucao() {
        return String.valueOf(datadevolucao);
    }

    public void setdatadevolucao(String datadevolucao) {
        this.datadevolucao = datadevolucao;
    }

    public float getQuilometragem() {
        return quilometragem;
    }

    public void setQuilometragem(float quilometragem) {
        this.quilometragem = quilometragem;
    }

    public String getcpfpessoa() {
        return cpfpessoa;
    }

    public void setcpfpessoa(String cpfpessoa) {
        this.cpfpessoa = cpfpessoa;
    }

    public String getplacaveiculo() {
        return placaveiculo;
    }

    public void setplacaveiculo(String placaveiculo) {
        this.placaveiculo = placaveiculo;
    }

    public boolean getativolocacao() {
        return ativolocacao;
    }

    public void setativolocacao(boolean ativolocacao) {
        this.ativolocacao = ativolocacao;
    }

    @Override
    public boolean equals(Object obj) {
        Locacao loc = (Locacao) obj;
        if(loc.getId().equals(this.getId()))
            return true;
        return false;
    }

    public String toString() {
        return "Locação " +
                "Data de Locação:" + datalocacao +
                ", Data de Devolução:" + datadevolucao +
                ", Quilometragem:" + quilometragem +
                ", CPF:'" + cpfpessoa + '\'' +
                ", Placa do Veículo:'" + placaveiculo + '\'' +
                ", Ativo:" + ativolocacao;
    }
}
