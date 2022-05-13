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
package Destination.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.gui.BaseForm;
import com.mycompany.myapp.entities.Destination;
import com.mycompany.myapp.entities.services.ServiceDestination;
import java.util.ArrayList;

/**
 * The newsfeed form
 *
 * @author Shai Almog
 */
public class RechercheDest extends BaseForm {

    Form current;
    Button btn = new Button("Back");

    public RechercheDest(Resources res) {
        
       
        //search
    
        Toolbar.isPermanentSideMenu();
        //Toolbar= Toolbar.HAND_CURSOR;

        add(new InfiniteProgress());

        Display.getInstance().scheduleBackgroundTask(() -> {
           
            Display.getInstance().callSerially(() -> {
                removeAll();
                ArrayList<Destination> dest = new ArrayList();
                ServiceDestination sa = new ServiceDestination();
                dest = sa.getAllDestinations();
                for (Destination fi : dest) {

                    MultiButton m = new MultiButton();
                    String url = "file://C:/Users/mahdi/Downloads/Escapade (2)/escapade/public/images/" + fi.getImg();
                    System.out.println(url);
                    int deviceWidth = Display.getInstance().getDisplayWidth();
                    Image placeholder = Image.createImage(deviceWidth / 3, deviceWidth / 3, 0xbfc9d2);
                    EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
                    Image i = URLImage.createToStorage(encImage, "fileNameInStoragez" + fi.getId(), url, URLImage.RESIZE_SCALE);
                    System.out.println(i);
                    m.setIcon(i);
                    m.setTextLine1("Pays : " + String.valueOf(fi.getPays()));
                    m.setTextLine2("Ville :" + String.valueOf(fi.getVille()));
                    add(m);
                }
                revalidate();
            });
        });
        getToolbar().addSearchCommand(e -> {
            String text = (String) e.getSource();
            if (text == null || text.length() == 0) {
                // clear search
                for (Component cmp : getContentPane()) {
                    cmp.setHidden(false);
                    cmp.setVisible(true);
                }
                getContentPane().animateLayout(150);
            } else {
                text = text.toLowerCase();
                for (Component cmp : getContentPane()) {
                    MultiButton mb = (MultiButton) cmp;
                    String line1 = mb.getTextLine1();
                    String line2 = mb.getTextLine2();
                    boolean show = line1 != null && line1.toLowerCase().indexOf(text) > -1
                            || line2 != null && line2.toLowerCase().indexOf(text) > -1;
                    mb.setHidden(!show);
                    mb.setVisible(show);
                }
                getContentPane().animateLayout(150);
            }
        }, 4);

        getToolbar().addMaterialCommandToSideMenu("Gestion Destination", FontImage.MATERIAL_BRIGHTNESS_1, e -> new AllDestination(res).show());
        
//        Container cnt = new Container();
//        cnt.add(btn);
//        current.add(cnt);
//        btn.addActionListener(e -> new AllDestination(res).show());
   
    }

}
