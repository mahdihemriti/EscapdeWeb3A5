/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.mycompany.gui;

import com.codename1.components.FloatingHint;
import com.codename1.datatransfer.DropTarget;
import com.codename1.io.FileSystemStorage;
import com.codename1.l10n.DateFormatPatterns;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.RoundBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.User;
import com.mycompany.myapp.entities.services.ServiceUser;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

/**
 * Signup UI
 *
 * @author Shai Almog
 */
public class SignUpForm extends BaseForm {
   String Imagecode;
   String filePath="";

    public SignUpForm(Resources res) {
        super(new BorderLayout());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        tb.setUIID("Container");
        getTitleArea().setUIID("Container");
        Form previous = Display.getInstance().getCurrent();
        tb.setBackCommand("", e -> previous.showBack());
        setUIID("SignIn");
                
        TextField nom = new TextField("", "Nom", 20, TextField.EMAILADDR);
        TextField prenom = new TextField("", "Preom", 20, TextField.EMAILADDR);
        TextField email = new TextField("", "Mail", 20, TextField.EMAILADDR);
        TextField numtel = new TextField("", "Telephone", 20, TextField.EMAILADDR);
        TextField ville = new TextField("", "Ville", 20, TextField.EMAILADDR);
                
        Picker datePicker = new Picker();
        datePicker.setType(Display.PICKER_TYPE_DATE);
        datePicker.setDate(new Date());

        TextField password = new TextField("", "Password", 20, TextField.PASSWORD);
        TextField confirmPassword = new TextField("", "Confirm Password", 20, TextField.PASSWORD);
        email.setSingleLineTextArea(false);
        password.setSingleLineTextArea(false);
        confirmPassword.setSingleLineTextArea(false);
        Button next = new Button("Next");
        Button signIn = new Button("Sign In");
        signIn.addActionListener(e -> previous.showBack());
        signIn.setUIID("Link");
        Label alreadHaveAnAccount = new Label("Already have an account?");
        
        //IMAGE
        Font materialFont = FontImage.getMaterialDesignFont();
        FontImage fntImage = FontImage.createFixed("\uE871", materialFont, 0xffffff, 100, 100);
        Button b2 = new Button(fntImage);
        Style fabStyle = b2.getAllStyles();
        fabStyle.setBorder(RoundBorder.create().color(0xf05f5f).shadowOpacity(100));
        fabStyle.setFgColor(0xf15f5f);
        fabStyle.setBgTransparency(50);
        fabStyle.setBgColor(0xf05f5f);
        Label lbimg = new Label();
         if (DropTarget.isSupported()) {
        DropTarget dnd = DropTarget.create((evt)->{
        String srcFile = (String)evt.getSource();
        System.out.println("Src file is "+srcFile);
       
               String  maChaine = srcFile;
               filePath= maChaine.substring(19,srcFile.length());
               System.out.println(filePath);
                    System.out.println("Location: "+evt.getX()+", "+evt.getY());
                    if (srcFile != null) {
                        try {
                            Image imgg = Image.createImage(FileSystemStorage.getInstance().openInputStream(srcFile));
                            imgg.scale(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayWidth());
                                lbimg.setIcon(imgg);
                            // c3.removeComponent(imgv);
                            revalidate();
                        } catch (Exception ex) {
                            System.out.println(ex);
                        }
                    } 
                }, Display.GALLERY_IMAGE);
            }

        Container content = BoxLayout.encloseY(
                new Label("Sign Up", "LogoLabel"),
                new FloatingHint(nom),
                createLineSeparator(),
                new FloatingHint(prenom),
                createLineSeparator(),
                new FloatingHint(email),
                createLineSeparator(),
                new FloatingHint(numtel),
                createLineSeparator(),
                new FloatingHint(ville),
                createLineSeparator(),
                datePicker ,
                createLineSeparator(),
                new FloatingHint(password),
                createLineSeparator(),
                new FloatingHint(confirmPassword),
                createLineSeparator(),
                b2 ,
                createLineSeparator(),
                lbimg ,
                createLineSeparator()
        );
        content.setScrollableY(true);
        add(BorderLayout.CENTER, content);
        add(BorderLayout.SOUTH, BoxLayout.encloseY(
                next,
                FlowLayout.encloseCenter(alreadHaveAnAccount, signIn)
        ));
        next.requestFocus();
        next.addActionListener((evt) -> {
             if (nom.getText().equals("")||(prenom.getText().equals("")||(email.getText().equals(""))||(numtel.getText().equals(""))))
                {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                }
                else if(!password.getText().equals(confirmPassword.getText()))
                {
                        Dialog.show("Alert", "Password don't match", new Command("OK"));
                }
                else
                {
                    try {
                            User u = new User();
                            u.setNom(nom.getText());
                            u.setPrenom(prenom.getText());
                            u.setEmail(email.getText());
                            u.setMdp(password.getText());
                            u.setNumtel(numtel.getText());
                            u.setVille(ville.getText());
                            u.setImage(filePath);
                                                    DateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy");
                        Date datecreation = new Date(System.currentTimeMillis());
                        SimpleDateFormat format = new 
                        SimpleDateFormat(DateFormatPatterns.ISO8601);

                        u.setDatenaiss(datePicker.getDate());

                           if( ServiceUser.getInstance().addUser(u)){
                               
                                   Dialog.show("Success","Inscription avec success",new Command("OK"));
                                   new SignInForm(res).show();
  
                        }
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
            new ActivateForm(res).show();
        });
    }
    
}
