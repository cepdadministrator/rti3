<?php if(!defined('KIRBY')) exit ?>

# talk blue print

title: Page
pages: true
files: true
fields:
  code: 
    label: Code
    type:  text
  type: 
    label: Workshop, Breakout, Plenary (w, b, p)
    type:  text
  date: 
    label: 18 or 19
    type:  text
  time: 
    label: eg 1800
    type:  text
  title: 
    label: Talk Title
    type:  text
  authors: 
    label: Author(s) or Presenter
    type:  text
    size:  large
  abstract: 
    label: Text or Abstract
    type:  textarea
    size:  medium
  goals: 
    label: Objectives
    type:  textarea
    size:  medium

filefields: 
  caption: 
    label: Title
    type:  text
  kind: 
    label: Kind (Presentation, Attachment)
    type:  text