package com.example.isabellaa.localplus.entidade;

public class Terceiros {
    private Integer id;
    private String nomeT;
    private String rgT;
    private String enderecoT;
    private String cpfT;
    private String placaV;
    private String nomeV;
    private String modeloV;
    private String seguroV;
    private String locacaoV;
    private String corV;
    private String locadoV;
    private String marcaV;

    @Override
    public String toString() {
        return "Dono:"+nomeT+"\nCarro:"+nomeV+"\nValor:"+locacaoV;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNomeT() {
        return nomeT;
    }

    public void setNomeT(String nomeT) {
        this.nomeT = nomeT;
    }

    public String getRgT() {
        return rgT;
    }

    public void setRgT(String rgT) {
        this.rgT = rgT;
    }

    public String getEnderecoT() {
        return enderecoT;
    }

    public void setEnderecoT(String enderecoT) {
        this.enderecoT = enderecoT;
    }

    public String getCpfT() {
        return cpfT;
    }

    public void setCpfT(String cpfT) {
        this.cpfT = cpfT;
    }

    public String getPlacaV() {
        return placaV;
    }

    public void setPlacaV(String placaV) {
        this.placaV = placaV;
    }

    public String getNomeV() {
        return nomeV;
    }

    public void setNomeV(String nomeV) {
        this.nomeV = nomeV;
    }

    public String getModeloV() {
        return modeloV;
    }

    public void setModeloV(String modeloV) {
        this.modeloV = modeloV;
    }

    public String getSeguroV() {
        return seguroV;
    }

    public void setSeguroV(String seguroV) {
        this.seguroV = seguroV;
    }

    public String getLocacaoV() {
        return locacaoV;
    }

    public void setLocacaoV(String locacaoV) {
        this.locacaoV = locacaoV;
    }

    public String getCorV() {
        return corV;
    }

    public void setCorV(String corV) {
        this.corV = corV;
    }

    public String getLocadoV() {
        return locadoV;
    }

    public void setLocadoV(String locadoV) {
        this.locadoV = locadoV;
    }

    public String getMarcaV() {
        return marcaV;
    }

    public void setMarcaV(String marcaV) {
        this.marcaV = marcaV;
    }
}
