import Enum from '@gdbots/common/Enum';

export default class ContentType extends Enum {
}

ContentType.configure({
  UNKNOWN: 'unknown',
  ARTICLE: 'article',
  AUDIO: 'audio',
  GALLERY: 'gallery',
  LINK: 'link',
  PHOTO: 'photo',
  POLL: 'poll',
  PROFILE: 'profile',
  QUOTE: 'quote',
  SOLICIT: 'solicit',
  TEXT: 'text',
  VIDEO: 'video',
}, 'triniti:curator:content-type');