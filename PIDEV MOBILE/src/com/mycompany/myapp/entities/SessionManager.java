/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

import com.codename1.io.Preferences;
import java.util.Date;

/**
 *
 * @author Lenovo
 */
public class SessionManager {
    
    public static Preferences pref ; // 3ibara memoire sghira nsajlo fiha data 
    
    
    
    // hethom données ta3 user lyt7b tsajlhom fi session  ba3d login 
    private static int id ; 
    private static String nom ; 
    private static String prenom ; 
    private static String email; 
    private static String passowrd ;
    private static String image;
    private static String datenaiss;
    private static String numtel;
    private static String ville;
    private static String blocked;
    private static String role;

    public static Preferences getPref() {
        return pref;
    }

    public static void setPref(Preferences pref) {
        SessionManager.pref = pref;
    }

    public static int getId() {
        return pref.get("id",id);// kif nheb njib id user connecté apres njibha men pref 
    }

    public static void setId(int id) {
        pref.set("id",id);//nsajl id user connecté  w na3tiha identifiant "id";
    }

    public static String getNom() {
        return pref.get("nom",nom);
    }

    public static void setNom(String nom) {
         pref.set("nom",nom);
    }

    public static String getEmail() {
        return pref.get("email",email);
    }

    public static void setEmail(String email) {
         pref.set("email",email);
    }

    public static String getPassowrd() {
        return pref.get("passowrd",passowrd);
    }

    public static void setPassowrd(String passowrd) {
         pref.set("passowrd",passowrd);
    }


    public static String getPrenom() {  
        return pref.get("prenom",prenom);

    }

    public static void setPrenom(String prenom) {
         pref.set("prenom",prenom);
    }

    public static String getImage() {
        return pref.get("image",image);
    }

    public static void setImage(String image) {
         pref.set("image",image);
    }

    public static String getDatenaiss() {
        return pref.get("datenaiss",datenaiss);
    }

    public static void setDatenaiss(String datenaiss) {
         pref.set("datenaiss",datenaiss);
    }

    public static String getNumtel() {
        return pref.get("numtel",numtel);
    }

    public static void setNumtel(String numtel) {
         pref.set("numtel",numtel);
    }

    public static String getVille() {
        return pref.get("ville",ville);
    }

    public static void setVille(String ville) {
         pref.set("ville",ville);
    }

    public static String getBlocked() {
        return pref.get("blocked",blocked);
    }

    public static void setBlocked(String blocked) {
         pref.set("blocked",blocked);
    }

    public static String getRole() {
        return pref.get("role",role);
    }

    public static void setRole(String role) {
         pref.set("role",role);
    }
    
    
}
